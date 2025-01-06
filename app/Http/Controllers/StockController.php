<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $pagination = $request->get('perPage', 10);
    
        $products = Products::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhere('product_code', 'like', "%{$search}%")
                             ->orWhere('supplier', 'like', "%{$search}%");
            })
            ->paginate($pagination)
            ->appends(['search' => $search, 'perPage' => $pagination]);
    
        return view('pages.stock.index', compact('products'));
    }

    public function create()
    {
        return view('pages.stock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'variants' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255|',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Products::create([
            'product_code' => $request->product_code,
            'name' => $request->name,
            'variants' => $request->variants,
            'category' => $request->category,
            'supplier' => $request->supplier,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('stock.index')->with('success', 'Data produk berhasil ditambahkan!');
    }

    public function edit($productCode)
    {
        $product = Products::where('product_code', $productCode)->firstOrFail();
        return view('pages.stock.edit', compact('product'));
    }

    public function update(Request $request, $productCode)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'variants' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'supplier' => 'required|string|max:255|',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Products::where('product_code', $productCode)->firstOrFail();
        $product->update([
            'name' => $request->name,
            'variants' => $request->variants,
            'category' => $request->category,
            'supplier' => $request->supplier,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('stock.index')->with('success', 'Data produk berhasil diperbarui!');
    }

    public function destroy($productCode)
    {
        $product = Products::where('product_code', $productCode)->firstOrFail();
        $product->delete();

        if (Products::count() === 0) {
            DB::statement('ALTER TABLE products AUTO_INCREMENT = 1');
        }

        return redirect()->route('stock.index')->with('success', 'Data produk berhasil dihapus!');
    }
}
