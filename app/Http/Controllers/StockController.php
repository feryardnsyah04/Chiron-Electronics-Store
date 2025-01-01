<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index(Request $request) // Tambahkan parameter $request
    {
        $pagination = $request->get('perPage', 10); // Ambil nilai dari parameter 'perPage' (default 10)
        $products = Products::paginate($pagination); // Gunakan paginate dengan nilai pagination
        
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
            'variants' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255|unique:products',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $productCode = $this->generateProductCode($request->name);

        Products::create([
            'product_code' => $productCode,
            'name' => $request->name,
            'variants' => $request->variants,
            'category' => $request->category,
            'serial_number' => $request->serial_number,
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
            'serial_number' => 'required|string|max:255|unique:products,serial_number,' . $productCode . ',product_code',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Products::where('product_code', $productCode)->firstOrFail();
        $product->update([
            'name' => $request->name,
            'variants' => $request->variants,
            'category' => $request->category,
            'serial_number' => $request->serial_number,
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
