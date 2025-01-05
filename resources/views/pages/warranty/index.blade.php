@extends('layouts.app')

@section('title', 'Data Garansi')

@section('content')
<div class="d-flex flex-column min-vh-100">
    <div class="container table-container flex-grow-1 mt-5 pb-5">
        <h1 class="text-center">Data Garansi</h1>
        <div class="d-flex justify-content-between mb-3">
            {{-- Tombol Tambah Produk --}}
            <div class="flex-grow-1">
                <a href="{{ route('warranty.create') }}" class="btn btn-success">Tambah Garansi</a>
            </div>
    
            {{-- Form Pencarian --}}
            <div class="d-flex flex-column align-items-end">
                <form action="{{ route('warranty.index') }}" method="GET" class="d-flex mb-2">
                    <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari Produk..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                </form>
    
                {{-- Dropdown untuk jumlah item per halaman --}}
                <form action="{{ route('stock.index') }}" method="GET" id="paginationForm">
                    <input type="hidden" name="search" value="{{ request('search') }}">
                    <label for="perPage" class="form-label me-2">Tampilkan</label>
                    <select name="perPage" id="perPage" class="form-select form-select-sm d-inline-block w-auto" onchange="document.getElementById('paginationForm').submit()">
                        <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
                    </select>
                    <span>data per halaman</span>
                </form>
            </div>
        </div>
    
        {{-- Tabel Data Garansi --}}
        <table class="table table-striped-columns table-hover">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Produk</th>
                    <th>Varian</th>
                    <th>Nomer Seri</th>
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
                        <td>{{ $warranty->product->variants }}</td>
                        <td>{{ $warranty->serial_number }}</td>
                        <td>{{ $warranty->buyer_name }}</td>
                        <td>{{ $warranty->email }}</td>
                        <td>{{ $warranty->phone }}</td>
                        <td>{{ \Carbon\Carbon::parse($warranty->purchase_time)->format('d-m-Y') }}</td>
                        <td>{{ $warranty->warranty_duration }} Bulan</td>
                        <td>{{ \Carbon\Carbon::parse($warranty->expiration_time)->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('warranty.edit', $warranty->id) }}" class="btn btn-primary btn-sm" style="margin-bottom: 6px; width: 4rem">Edit</a>
                            <button style="width: 4rem" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $warranty->id }}">Hapus</button>
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
                        <td colspan="12" class="text-center">Data garansi masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
        {{-- Pagination --}}
        <div class="d-flex justify-content-end">
            {{ $warranties->links('pagination::bootstrap-5') }}
        </div>
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
