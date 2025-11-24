<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'id' => 2,
                'product_id' => 3,
                'id_pelanggan' => 7,
                'rating' => 5,
                'comment' => '',
                'created_at' => '2025-11-21 13:58:55',
                'nama_pelanggan' => ''
            ],
            [
                'id' => 15,
                'product_id' => 1,
                'id_pelanggan' => 7,
                'rating' => 4,
                'comment' => 'Keren bagus bahannya',
                'created_at' => '2025-11-21 15:04:48',
                'nama_pelanggan' => 'Noel Anggit'
            ],
            [
                'id' => 16,
                'product_id' => 2,
                'id_pelanggan' => 7,
                'rating' => 3,
                'comment' => 'Kurang sreg ama bahannya',
                'created_at' => '2025-11-21 15:17:07',
                'nama_pelanggan' => ''
            ],
            [
                'id' => 20,
                'product_id' => 8,
                'id_pelanggan' => 7,
                'rating' => 4,
                'comment' => 'keren warnanya cocok',
                'created_at' => '2025-11-21 16:11:59',
                'nama_pelanggan' => ''
            ],
        ]);
    }
}
