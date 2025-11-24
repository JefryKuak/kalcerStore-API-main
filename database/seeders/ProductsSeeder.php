<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id'        => 1,
                'name'      => 'Nike Air Force 1',
                'price'     => 1729000,
                'brand'     => 'Nike',
                'image'     => 'https://placehold.co/400x300/EAF2F8/333?text=Nike+Air',
                'deskripsi' => 'Sneakers klasik dengan desain ikonik dan bantalan empuk.',
                'warna'     => '["Putih","Hitam"]',
                'ukuran'    => '[40,41,42,43,44]',
                'rating'    => 4.0,
                'stok'      => 21,
            ],
            [
                'id'        => 2,
                'name'      => 'Adidas Ultraboost',
                'price'     => 3300000,
                'brand'     => 'Adidas',
                'image'     => 'https://placehold.co/400x300/E8F6F3/333?text=Adidas+Runner',
                'deskripsi' => 'Sepatu lari dengan teknologi Boost yang empuk dan responsif.',
                'warna'     => '["Hitam","Abu-abu"]',
                'ukuran'    => '[39,40,41,42,43]',
                'rating'    => 3.0,
                'stok'      => 29,
            ],
            [
                'id'        => 3,
                'name'      => 'Vans Old Skool',
                'price'     => 1099000,
                'brand'     => 'Vans',
                'image'     => 'https://placehold.co/400x300/FEF9E7/333?text=Vans+Classic',
                'deskripsi' => 'Sneakers klasik bergaya streetwear.',
                'warna'     => '["Hitam-White", "Navy"]',
                'ukuran'    => '[38, 39, 40, 41, 42, 43]',
                'rating'    => 5.0,
                'stok'      => 20,
            ],
            [
                'id'        => 4,
                'name'      => 'Puma Suede Classic',
                'price'     => 899000,
                'brand'     => 'Puma',
                'image'     => 'https://placehold.co/400x300/FFF5E5/333?text=Puma+Suede',
                'deskripsi' => 'Sepatu suede klasik dengan tampilan elegan.',
                'warna'     => '["Merah","Hitam","Biru"]',
                'ukuran'    => '[39,40,41,42]',
                'rating'    => 4.4,
                'stok'      => 100,
            ],
            [
                'id'        => 5,
                'name'      => 'Converse Chuck Taylor',
                'price'     => 799000,
                'brand'     => 'Converse',
                'image'     => 'https://placehold.co/400x300/F0F0F0/333?text=Converse+All+Star',
                'deskripsi' => 'Sneakers canvas legendaris yang cocok untuk segala gaya.',
                'warna'     => '["Putih","Hitam","Maroon"]',
                'ukuran'    => '[38,39,40,41,42,43,44]',
                'rating'    => 4.7,
                'stok'      => 54,
            ],
            [
                'id'        => 6,
                'name'      => 'Reebok Classic Leather',
                'price'     => 1299000,
                'brand'     => 'Reebok',
                'image'     => 'https://placehold.co/400x300/EDEDED/333?text=Reebok+Classic',
                'deskripsi' => 'Sepatu retro dengan kulit premium yang nyaman.',
                'warna'     => '["Putih","Hitam"]',
                'ukuran'    => '[40,41,42,43]',
                'rating'    => 4.5,
                'stok'      => 60,
            ],
            [
                'id'        => 7,
                'name'      => 'Asics Gel-Kayano',
                'price'     => 2499000,
                'brand'     => 'Asics',
                'image'     => 'https://placehold.co/400x300/DFF0D8/333?text=Asics+Gel-Kayano',
                'deskripsi' => 'Sepatu running premium dengan teknologi Gel untuk kenyamanan maksimal.',
                'warna'     => '["Hitam","Biru"]',
                'ukuran'    => '[40,41,42,43,44]',
                'rating'    => 4.9,
                'stok'      => 65,
            ],
            [
                'id'        => 8,
                'name'      => 'New Balance 550',
                'price'     => 2099000,
                'brand'     => 'New Balance',
                'image'     => 'https://placehold.co/400x300/F5EEF8/333?text=New+Balance',
                'deskripsi' => 'Sneakers retro dengan desain bulky yang sedang tren.',
                'warna'     => '["Putih-Hijau","Putih-Biru"]',
                'ukuran'    => '[39,40,41,42,43]',
                'rating'    => 4.0,
                'stok'      => 71,
            ],
            [
                'id'        => 16,
                'name'      => 'Mills Ultras Dreamer',
                'price'     => 230000,
                'brand'     => 'Mills',
                'image'     => 'prod_691d3b24612679.23753931.png',
                'deskripsi' => 'Sepatu',
                'warna'     => '["Biru","Merah"]',
                'ukuran'    => '[38,39,40,41]',
                'rating'    => 4.8,
                'stok'      => 22,
            ],
        ]);
    }
}
