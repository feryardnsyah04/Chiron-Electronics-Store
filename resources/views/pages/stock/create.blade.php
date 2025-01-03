@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center">Tambah Stok Barang</h1>

    <form action="{{ route('stock.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_code" class="form-label">Kode Produk</label>
            <input type="text" class="form-control" id="product_code" name="product_code" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="variants" class="form-label">Varian</label>
            <input type="text" class="form-control" id="variants" name="variants" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Nomor Seri</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('stock.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
