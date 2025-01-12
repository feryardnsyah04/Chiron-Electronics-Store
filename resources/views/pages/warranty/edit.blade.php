@extends('layouts.app')

@section('title', 'Edit Data Garansi')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center"><b>Edit Data Garansi</b></h1>

    <form action="{{ route('warranty.update', $warranty->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_id" class="form-label">Produk</label>
            <select class="form-select" id="product_id" name="product_id" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $warranty->product_id == $product->id ? 'selected' : '' }}>
                        {{ $product->product_code }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Nomor Seri</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" value="{{ $warranty->serial_number }}" required>
        </div>
        <div class="mb-3">
            <label for="buyer_name" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="{{ $warranty->buyer_name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $warranty->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $warranty->phone }}" required>
        </div>
        <div class="mb-3">
            <label for="purchase_time" class="form-label">Tanggal Pembelian</label>
            <input type="date" class="form-control" id="purchase_time" name="purchase_time" value="{{ $warranty->purchase_time }}" required>
        </div>
        <div class="mb-3">
            <label for="warranty_duration" class="form-label">Durasi Garansi</label>
            <select class="form-select" id="warranty_duration" name="warranty_duration" required>
                <option value="6" {{ $warranty->warranty_duration == 6 ? 'selected' : '' }}>6 Bulan</option>
                <option value="12" {{ $warranty->warranty_duration == 12 ? 'selected' : '' }}>1 Tahun</option>
                <option value="24" {{ $warranty->warranty_duration == 24 ? 'selected' : '' }}>2 Tahun</option>
                <option value="36" {{ $warranty->warranty_duration == 36 ? 'selected' : '' }}>3 Tahun</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('warranty.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
