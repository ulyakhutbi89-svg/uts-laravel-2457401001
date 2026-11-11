@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="card shadow-sm border mx-auto">
    <div class="card-header bg-warning text-white py-3">
        <h4 class="mb-0 fw-bold text-dark">📝 Ubah / Edit Data Produk</h4>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Produk</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori Produk</label>
                <select name="category" class="form-select @error('category') is-invalid @enderror">
                    <option value="Minuman" {{ old('category', $product->category) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Makanan Ringan" {{ old('category', $product->category) == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                    <option value="Alat Tulis" {{ old('category', $product->category) == 'Alat Tulis' ? 'selected' : '' }}>Alat Tulis</option>
                </select>
                @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Harga Produk (Rp)</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}">
                    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Stok Barang</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}">
                    @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Tanggal Terima</label>
                    <input type="date" name="received_at" class="form-control @error('received_at') is-invalid @enderror" value="{{ old('received_at', $product->received_at) }}">
                    @error('received_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Berat Barang (Gram)</label>
                    <input type="number" name="weight_gram" class="form-control @error('weight_gram') is-invalid @enderror" value="{{ old('weight_gram', $product->weight_gram) }}">
                    @error('weight_gram') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="mb-3 form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                <label class="form-check-label fw-semibold" for="is_active">Aktifkan Status Penjualan Produk</label>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Deskripsi Tambahan</label>
                <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning px-4">Perbarui Data</button>
                <a href="{{ route('products.index') }}" class="btn btn-light border px-4">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
