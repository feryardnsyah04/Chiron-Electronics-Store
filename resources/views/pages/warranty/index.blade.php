@extends('layouts.app')

@section('title', 'Data Garansi')

@section('content')
<div class="container mt-5 pb-5">
    <h1 class="text-center">Data Garansi</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('warranty.create') }}" class="btn btn-success">Tambah Garansi</a>

        {{-- Dropdown untuk jumlah item per halaman --}}
        <form action="{{ route('warranty.index') }}" method="GET" id="paginationForm">
            <label for="perPage" class="form-label me-2">Tampilkan</label>
            <select name="perPage" id="perPage" class="form-select form-select-sm d-inline-block w-auto" onchange="document.getElementById('paginationForm').submit()">
                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
            </select>
            <span>data per halaman</span>
        </form>
    </div>

    {{-- Tabel Data Garansi --}}
    <table class="table table-striped-columns table-hover">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>Produk</th>
                <th>Nama Pembeli</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Tanggal Pembelian</th>
                <th>Durasi Garansi</th>
                <th>Tanggal Kedaluwarsa</th>
                <th style="width: 160px">Aksi</th>
            </tr>
        </thead class="table-group-divider">
        <tbody>
            @forelse($warranties as $warranty)
                <tr>
                    <td>{{ $loop->iteration + ($warranties->currentPage() - 1) * $warranties->perPage() }}</td>
                    <td>{{ $warranty->product->name }}</td>
                    <td>{{ $warranty->buyer_name }}</td>
                    <td>{{ $warranty->email }}</td>
                    <td>{{ $warranty->phone }}</td>
                    <td>{{ \Carbon\Carbon::parse($warranty->purchase_time)->format('d-m-Y') }}</td>
                    <td>{{ $warranty->warranty_duration }} Bulan</td>
                    <td>{{ \Carbon\Carbon::parse($warranty->expiration_time)->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('warranty.edit', $warranty->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $warranty->id }}">Hapus</button>
                    </td>
                </tr>

                {{-- Modal Konfirmasi Hapus --}}
                <div class="modal fade" id="deleteModal-{{ $warranty->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data garansi untuk <strong>{{ $warranty->product->name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('warranty.destroy', $warranty->id) }}" method="POST">
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
                    <td colspan="9" class="text-center">Data garansi masih kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $warranties->appends(['perPage' => request('perPage')])->links() }}
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
