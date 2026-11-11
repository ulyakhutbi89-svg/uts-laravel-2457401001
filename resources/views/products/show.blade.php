@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="card shadow-sm border mx-auto" style="max-width: 700px;">
    <div class="card-header bg-info text-white py-3">
        <h4 class="mb-0 fw-bold">🔍 Detail Spesifik Informasi Produk</h4>
    </div>
    <div class="card-body p-4">
        <table class="table table-bordered table-striped align-middle">
            <tr>
                <th width="30%" class="bg-light fw-semibold">Nama Barang</th>
                <td class="fw-bold text-primary">{{ $product->name }}</td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Kategori Kelompok</th>
                <td><span class="badge bg-dark">{{ $product->category }}</span></td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Harga Jual Satuan</th>
                <td class="text-success fw-bold">Rp {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Ketersediaan Stok</th>
                <td>{{ $product->stock }} Unit / Pcs</td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Berat Bersih Barang</th>
                <td>{{ $product->weight_gram }} Gram</td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Tanggal Masuk Gudang</th>
                <td>{{ $product->received_at }}</td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Status Pemasaran</th>
                <td>
                    @if($product->is_active)
                        <span class="badge bg-success">Aktif Di Etalase</span>
                    @else
                        <span class="badge bg-danger">Arsip / Non-Aktif</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th class="bg-light fw-semibold">Keterangan / Deskripsi</th>
                <td>{{ $product->description ?? 'Tidak ada deskripsi tambahan.' }}</td>
            </tr>
        </table>
        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">⬅️ Kembali ke Daftar</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning px-4 text-dark fw-bold">Edit Data Ini</a>
        </div>
    </div>
</div>
@endsection
