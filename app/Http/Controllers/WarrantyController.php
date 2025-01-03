<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use App\Models\Products;
use Carbon\Carbon;

class WarrantyController extends Controller
{
    public function index(Request $request)
    {
        $pagination = $request->get('perPage', 10);
        $warranties = Warranty::with('product')->paginate($pagination);

        return view('pages.warranty.index', compact('warranties'));
    }

    public function create()
    {
        $products = Products::all();
        return view('pages.warranty.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'buyer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'purchase_time' => 'required|date',
            'warranty_duration' => 'required|integer|min:1',
        ]);
        
        // Hitung expiration_time berdasarkan warranty_duration dan purchase_time
        $expirationTime = Carbon::parse($request->purchase_time)->addMonths($request->warranty_duration * 6);
        
        Warranty::create([
            'product_id' => $request->product_id,
            'buyer_name' => $request->buyer_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'purchase_time' => $request->purchase_time,
            'warranty_duration' => $request->warranty_duration,
            'expiration_time' => $expirationTime,
        ]);
        

        return redirect()->route('warranty.index')->with('success', 'Data garansi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $warranty = Warranty::findOrFail($id);
        $products = Products::all();
        return view('pages.warranty.edit', compact('warranty', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'buyer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'warranty_duration' => 'required|integer|min:1',
        ]);

        $warranty = Warranty::findOrFail($id);

        // Hitung expiration_time berdasarkan warranty_duration
        $expirationTime = Carbon::now()->addMonths($request->warranty_duration * 6);

        $warranty->update([
            'product_id' => $request->product_id,
            'buyer_name' => $request->buyer_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'warranty_duration' => $request->warranty_duration,
            'expiration_time' => $expirationTime,
        ]);

        return redirect()->route('warranty.index')->with('success', 'Data garansi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $warranty = Warranty::findOrFail($id);
        $warranty->delete();

        return redirect()->route('warranty.index')->with('success', 'Data garansi berhasil dihapus!');
    }
}
