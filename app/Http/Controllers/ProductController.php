<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Menampilkan Semua Data Produk
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    // 2. Menampilkan Form Tambah Produk
    public function create()
    {
        return view('products.create');
    }

    // 3. Menyimpan Data Produk Baru + Validasi
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Minuman,Makanan Ringan,Alat Tulis',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'received_at' => 'required|date',
            'weight_gram' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
            'received_at' => $request->received_at,
            'weight_gram' => $request->weight_gram,
            'is_active' => $request->has('is_active'),
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // 4. Menampilkan Detail Spesifik Satu Produk
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // 5. Menampilkan Form Edit Produk
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // 6. Memperbarui Data Produk + Validasi
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Minuman,Makanan Ringan,Alat Tulis',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'received_at' => 'required|date',
            'weight_gram' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $product->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
            'received_at' => $request->received_at,
            'weight_gram' => $request->weight_gram,
            'is_active' => $request->has('is_active'),
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // 7. Menghapus Data Produk
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
