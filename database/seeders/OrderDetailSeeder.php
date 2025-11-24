<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_detail')->insert([
            ['id_detail' => 2, 'id_order' => 6, 'id_produk' => 16, 'nama_produk' => 'Mills Ultras Dreamer', 'brand' => 'Mills', 'warna' => 'Merah', 'ukuran' => '40', 'qty' => 1, 'harga' => 230000, 'subtotal' => 230000],
            ['id_detail' => 3, 'id_order' => 7, 'id_produk' => 3, 'nama_produk' => 'Vans Old Skool', 'brand' => 'Vans', 'warna' => 'Navy', 'ukuran' => '42', 'qty' => 1, 'harga' => 1099000, 'subtotal' => 1099000],
            ['id_detail' => 4, 'id_order' => 8, 'id_produk' => 1, 'nama_produk' => 'Nike Air Force 1', 'brand' => 'Nike', 'warna' => 'Hitam', 'ukuran' => '42', 'qty' => 1, 'harga' => 1729000, 'subtotal' => 1729000],
            ['id_detail' => 5, 'id_order' => 9, 'id_produk' => 2, 'nama_produk' => 'Adidas Ultraboost', 'brand' => 'Adidas', 'warna' => 'Hitam', 'ukuran' => '40', 'qty' => 1, 'harga' => 3300000, 'subtotal' => 3300000],
            ['id_detail' => 6, 'id_order' => 10, 'id_produk' => 2, 'nama_produk' => 'Adidas Ultraboost', 'brand' => 'Adidas', 'warna' => 'Abu-abu', 'ukuran' => '42', 'qty' => 1, 'harga' => 3300000, 'subtotal' => 3300000],
            ['id_detail' => 7, 'id_order' => 11, 'id_produk' => 2, 'nama_produk' => 'Adidas Ultraboost', 'brand' => 'Adidas', 'warna' => 'Abu-abu', 'ukuran' => '40', 'qty' => 1, 'harga' => 3300000, 'subtotal' => 3300000],
            ['id_detail' => 8, 'id_order' => 12, 'id_produk' => 8, 'nama_produk' => 'New Balance 550', 'brand' => 'New Balance', 'warna' => 'Putih-Hijau', 'ukuran' => '43', 'qty' => 1, 'harga' => 2099000, 'subtotal' => 2099000],
        ]);
    }
}
