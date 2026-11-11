@extends('layouts.app')

@section('title', 'Beranda - Toko UTS 2457401001')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold text-primary mb-3">Selamat Datang di Aplikasi Toko</h1>
        <p class="col-md-8 mx-auto fs-5 text-secondary">
            Sistem Informasi Manajemen Data Produk Toko ini dibuat khusus untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Web Development.
        </p>
        <hr class="my-4 col-md-6 mx-auto">
        <p class="fw-semibold text-dark">Gunakan tombol di bawah ini untuk mengelola data barang jualan toko secara realtime:</p>
        <a href="{{ url('/products') }}" class="btn btn-primary btn-lg px-4 shadow">
            📦 Kelola Daftar Produk
        </a>
    </div>
</div>
@endsection
