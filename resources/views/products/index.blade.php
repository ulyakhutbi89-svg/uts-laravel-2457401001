@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">📦 Manajemen Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm">+ Tambah Produk Baru</a>
</div>

<div class="card shadow-sm border border-light rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary text-dark">
                    <tr>
                        <th class="ps-3">Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Berat (gr)</th>
                        <th>Status</th>
                        <th class="text-center pe-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td class="ps-3 fw-semibold">{{ $product->name }}</td>
                        <td><span class="badge bg-secondary">{{ $product->category }}</span></td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            @if($product->stock > 0)
                                <span class="text-success fw-bold">{{ $product->stock }} pcs</span>
                            @else
                                <span class="text-danger fw-bold">Habis</span>
                            @endif
                        </td>
                        <td>{{ $product->weight_gram }} gr</td>
                        <td>
                            @if($product->is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Non-Aktif</span>
                            @endif
                        </td>
                        <td class="text-center pe-3">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info text-white">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted fw-semibold">Belum ada data produk tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
