@extends('layouts.app')

@section('title', 'Stok Barang')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Stok Barang</h1>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('stock.create') }}" class="btn btn-success">Tambah Stok</a>

        {{-- Dropdown untuk jumlah item per halaman --}}
        <form action="{{ route('stock.index') }}" method="GET" id="paginationForm">
            <label for="perPage" class="form-label me-2">Tampilkan</label>
            <select name="perPage" id="perPage" class="form-select form-select-sm d-inline-block w-auto" onchange="document.getElementById('paginationForm').submit()">
                <option value="5" {{ request('perPage') == 5 ? 'selected' : '' }}>5</option>
                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
            </select>
            <span>data per halaman</span>
        </form>
    </div>

    {{-- Tabel Stok Barang --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Varian</th>
                <th>Kategori</th>
                <th>Nomor Seri</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->paginationView() }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->variants }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->serial_number }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('stock.edit', $product->product_code) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $product->product_code }}">Hapus</button>
                    </td>
                </tr>

                {{-- Modal Konfirmasi Hapus --}}
                <div class="modal fade" id="deleteModal-{{ $product->product_code }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus produk <strong>{{ $product->name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('stock.destroy', $product->product_code) }}" method="POST">
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
                    <td colspan="9" class="text-center">Stok barang masih kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination Links --}}
    <div class="d-flex justify-content-center">
        {{ $products->appends(['paginationView' => request('paginationView')])->links() }}
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
