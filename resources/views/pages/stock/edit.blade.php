@extends('layouts.app')

@section('title', 'Edit Stok Barang')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit Stok Barang</h1>

    <form action="{{ route('stock.update', $stock->product_code) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_code" class="form-label">Kode Produk</label>
            <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $stock->product_code }}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $stock->product_name }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $stock->category }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $stock->stock }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $stock->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
