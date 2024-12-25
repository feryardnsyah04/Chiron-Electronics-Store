<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class StockController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('pages.stock.index', compact('products'));
    }

    public function create()
    {
        return view('pages.stock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255|unique:products',
            'stock' => 'required|integer|min:0',
            'variants' => 'nullable|string|max:255',
        ]);

        $productCode = $this->generateProductCode($request->name);

        // Simpan ke database
        Products::create([
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'stock' => $request->stock,
            'product_code' => $productCode,
            'variants' => $request->variants,
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
            'serial_number' => 'required|string|max:255|unique:products,serial_number,' . $productCode . ',product_code',
            'stock' => 'required|integer|min:0',
            'variants' => 'nullable|string|max:255',
        ]);

        $product = Products::where('product_code', $productCode)->firstOrFail();
        $product->update([
            'name' => $request->name,
            'serial_number' => $request->serial_number,
            'stock' => $request->stock,
            'variants' => $request->variants,
        ]);

        return redirect()->route('stock.index')->with('success', 'Data produk berhasil diperbarui!');
    }

    public function destroy($productCode)
    {
        $product = Products::where('product_code', $productCode)->firstOrFail();
        $product->delete();

        return redirect()->route('stock.index')->with('success', 'Data produk berhasil dihapus!');
    }

    private function generateProductCode($productName)
    {
        $words = explode(' ', strtoupper($productName));
        $code = '';

        foreach ($words as $word) {
            $code .= $word[0];
        }

        $code = preg_replace('/[^A-Z0-9]/', '', $code);

        return $code;
    }
}
