@extends('layouts.app')

@section('title', 'Beranda - Toko Kita')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-3">
        <h1 class="display-6 fw-bold text-primary">Aplikasi Manajemen Toko Kita</h1>
        <p class="col-md-8 fs-5 text-muted mt-3">
            Sistem informasi sederhana untuk mencatat, memantau stok, dan mengelola daftar produk toko secara efisien.
        </p>
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-2">
            Lihat Daftar Produk &rarr;
        </a>
    </div>
</div>
@endsection
