@extends('layouts.app')

@section('title', 'Data Penjualan')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center">Data Penjualan</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('sales.create') }}" class="btn btn-success">Tambah Penjualan</a>

        {{-- Dropdown untuk jumlah item per halaman --}}
        <form action="{{ route('sales.index') }}" method="GET" id="paginationForm">
            <label for="perPage" class="form-label me-2">Tampilkan</label>
            <select name="perPage" id="perPage" class="form-select form-select-sm d-inline-block w-auto" onchange="document.getElementById('paginationForm').submit()">
                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
            </select>
            <span>data per halaman</span>
        </form>
    </div>

    {{-- Tabel Data Penjualan --}}
    <table class="table table-striped-columns table-hover">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Nama Pembeli</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Lokasi Pembelian</th>
                <th>Status Pesanan</th>
                <th style="width: 155px">Aksi</th>
            </tr>
        </thead class="table-group-divider">
        <tbody>
            @forelse($sales as $sale)
                <tr>
                    <td>{{ $loop->iteration + ($sales->currentPage() - 1) * $sales->perPage() }}</td>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->buyer_name }}</td>
                    <td>{{ $sale->email }}</td>
                    <td>{{ $sale->phone }}</td>
                    <td>{{ $sale->purchase_location }}</td>
                    <td>{{ $sale->order_status }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $sale->id }}">Hapus</button>
                    </td>
                </tr>

                {{-- Modal Konfirmasi Hapus --}}
                <div class="modal fade" id="deleteModal-{{ $sale->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data penjualan <strong>{{ $sale->product->name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Data penjualan masih kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $sales->appends(['perPage' => request('perPage')])->links() }}
    </div>
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