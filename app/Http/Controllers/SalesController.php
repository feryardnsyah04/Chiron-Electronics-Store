<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $pagination = $request->get('perPage', 10);

        $sales = Sales::query()
            ->when($search, function ($query, $search) {
                return $query->where('buyer_name', 'like', "%{$search}%")
                             ->orWhere('email', 'like', "%{$search}%")
                             ->orWhere('phone', 'like', "%{$search}%")
                             ->orWhere('serial_number', 'like', "%{$search}%");
            })
            ->paginate($pagination)
            ->appends(['search' => $search, 'perPage' => $pagination]);

        return view('pages.sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Products::all();
        return view('pages.sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'serial_number' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'buyer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'purchase_location' => 'required|string|max:255',
            'order_status' => 'required|string|max:255',
        ]);
    
        $product = Products::findOrFail($request->product_id);
    
        if ($product->stock < $request->quantity) {
            return redirect()->back()->withErrors(['quantity' => 'Stok produk tidak mencukupi.']);
        }
    
        $product->stock -= $request->quantity;
        $product->save();
    
        Sales::create($request->all());
    
        return redirect()->route('sales.index')->with('success', 'Data penjualan berhasil ditambahkan!');
    }    

    public function edit(Sales $sale)
    {
        $products = Products::all();
        return view('pages.sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'serial_number' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'buyer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'purchase_location' => 'required|string|max:255',
            'order_status' => 'required|string|max:255',
        ]);
    
        $sale = Sales::findOrFail($id);
        $product = Products::findOrFail($request->product_id);
    
        $difference = $request->quantity - $sale->quantity;
    
        if ($difference > 0 && $product->stock < $difference) {
            return redirect()->back()->withErrors(['quantity' => 'Stok produk tidak mencukupi.']);
        }
    
        $product->stock -= $difference;
        $product->save();
    
        $sale->update($request->all());
    
        return redirect()->route('sales.index')->with('success', 'Data penjualan berhasil diperbarui!');
    }    

    public function destroy($id)
    {
        $sale = Sales::findOrFail($id);
        $product = Products::findOrFail($sale->product_id);
    
        $product->stock += $sale->quantity;
        $product->save();
    
        $sale->delete();
    
        return redirect()->route('sales.index')->with('success', 'Data penjualan berhasil dihapus!');
    }    
}
