@extends('layouts.app')

@section('title', 'Stok Barang')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Stok Barang</h1>
    <div class="text-end mb-3">
        <a href="{{ route('stock.create') }}" class="btn btn-success">Tambah Stok</a>
    </div>

    {{-- Tabel Stok Barang --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $stock)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $stock->product_code }}</td>
                    <td>{{ $stock->product_name }}</td>
                    <td>{{ $stock->category }}</td>
                    <td>{{ $stock->stock }}</td>
                    <td>Rp{{ number_format($stock->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('stock.edit', $stock->product_code) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $stock->product_code }}">Hapus</button>
                    </td>
                </tr>

                {{-- Modal Konfirmasi Hapus --}}
                <div class="modal fade" id="deleteModal-{{ $stock->product_code }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus produk <strong>{{ $stock->product_name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('stock.destroy', $stock->product_code) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Toast Notification --}}
@if(session('success'))
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Notifikasi</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif
@endsection
