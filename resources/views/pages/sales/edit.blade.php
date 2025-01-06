@extends('layouts.app')

@section('title', 'Edit Data Penjualan')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center"><b>Edit Data Penjualan</b></h1>

    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select class="form-select" id="product_id" name="product_id" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $sale->product_id == $product->id ? 'selected' : '' }}>
                        {{ $product->product_code }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Nomor Seri</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" value="{{ $sale->serial_number }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $sale->quantity }}" required>
        </div>
        <div class="mb-3">
            <label for="buyer_name" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="{{ $sale->buyer_name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $sale->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $sale->phone }}" required>
        </div>
        <div class="mb-3">
            <label for="purchase_location" class="form-label">Lokasi Pembelian</label>
            <select class="form-select" id="purchase_location" name="purchase_location" required>
                <option value="Online" {{ $sale->purchase_location == 'Online' ? 'selected' : '' }}>Online</option>
                <option value="Offline" {{ $sale->purchase_location == 'Offline' ? 'selected' : '' }}>Offline</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="order_status" class="form-label">Status Pemesanan</label>
            <select class="form-select" id="order_status" name="order_status" required>
                <option value="Diproses" {{ $sale->order_status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="Dikirim" {{ $sale->order_status == 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
                <option value="Diterima" {{ $sale->order_status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
