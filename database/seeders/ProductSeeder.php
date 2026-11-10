<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Kopi Arabika 200 g',
                'category' => 'Minuman',
                'price' => 45000,
                'stock' => 12,
                'weight_gram' => 200,
                'received_at' => '2026-10-05',
                'is_active' => true,
                'description' => 'Biji kopi sangrai medium',
            ],
            [
                'name' => 'Keripik Singkong Balado',
                'category' => 'Makanan Ringan',
                'price' => 15000,
                'stock' => 30,
                'weight_gram' => 150,
                'received_at' => '2026-10-12',
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Buku Tulis 58 Lembar',
                'category' => 'Alat Tulis',
                'price' => 5000,
                'stock' => 0,
                'weight_gram' => 180,
                'received_at' => '2026-09-28',
                'is_active' => false,
                'description' => 'Isi 10 buku per pak',
            ],
            [
                'name' => 'Teh Hijau Melati Celup',
                'category' => 'Minuman',
                'price' => 18500,
                'stock' => 25,
                'weight_gram' => 100,
                'received_at' => '2026-10-15',
                'is_active' => true,
                'description' => 'Isi 25 kantong teh celup alami',
            ],
            [
                'name' => 'Kacang Atom Bawang',
                'category' => 'Makanan Ringan',
                'price' => 12000,
                'stock' => 40,
                'weight_gram' => 120,
                'received_at' => '2026-10-18',
                'is_active' => true,
                'description' => 'Renyah dan gurih untuk camilan',
            ],
            [
                'name' => 'Pulpen Gel Hitam 0.5mm',
                'category' => 'Alat Tulis',
                'price' => 3500,
                'stock' => 100,
                'weight_gram' => 15,
                'received_at' => '2026-10-01',
                'is_active' => true,
                'description' => 'Tinta cepat kering dan tidak macet',
            ],
            [
                'name' => 'Susu UHT Cokelat 250ml',
                'category' => 'Minuman',
                'price' => 7000,
                'stock' => 48,
                'weight_gram' => 260,
                'received_at' => '2026-11-01',
                'is_active' => true,
                'description' => 'Kemasan kotak siap minum',
            ],
            [
                'name' => 'Biskuit Gandum Cokelat',
                'category' => 'Makanan Ringan',
                'price' => 14000,
                'stock' => 18,
                'weight_gram' => 140,
                'received_at' => '2026-10-25',
                'is_active' => true,
                'description' => null,
            ],
            [
                'name' => 'Pensil 2B Ujian',
                'category' => 'Alat Tulis',
                'price' => 4000,
                'stock' => 60,
                'weight_gram' => 10,
                'received_at' => '2026-09-15',
                'is_active' => true,
                'description' => 'Lulus pemindaian komputer LJK',
            ],
            [
                'name' => 'Air Mineral Botol 600ml',
                'category' => 'Minuman',
                'price' => 4000,
                'stock' => 72,
                'weight_gram' => 620,
                'received_at' => '2026-11-03',
                'is_active' => true,
                'description' => 'Air pegunungan segar',
            ],
            [
                'name' => 'Penghapus Karet Putih',
                'category' => 'Alat Tulis',
                'price' => 2500,
                'stock' => 0,
                'weight_gram' => 20,
                'received_at' => '2026-08-20',
                'is_active' => false,
                'description' => 'Bersih tanpa meninggalkan noda',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
