@extends('layouts.app')

@section('title', 'Tambah Data Penjualan')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center">Tambah Data Penjualan</h1>

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select class="form-select" id="product_id" name="product_id" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="buyer_name" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="buyer_name" name="buyer_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="purchase_location" class="form-label">Lokasi Pembelian</label>
            <select class="form-select" id="purchase_location" name="purchase_location" required>
                <option value="Online">Online</option>
                <option value="Offline">Offline</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="order_status" class="form-label">Status Pemesanan</label>
            <select class="form-select" id="order_status" name="order_status" required>
                <option value="Diproses">Diproses</option>
                <option value="Dikirim">Dikirim</option>
                <option value="Diterima">Diterima</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
