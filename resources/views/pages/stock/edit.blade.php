@extends('layouts.app')

@section('title', 'Edit Data Barang')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center"><b>Edit Data Barang</b></h1>

    <form action="{{ route('stock.update', $product->product_code) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_code" class="form-label">Kode Produk</label>
            <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $product->product_code }}" disabled>
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="variants" class="form-label">Varian</label>
            <input type="text" class="form-control" id="variants" name="variants" value="{{ $product->variants }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}" required>
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $product->supplier }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('stock.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
