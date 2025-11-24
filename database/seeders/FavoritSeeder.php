<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorit;

class FavoritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favorit::insert([
            [
                'id' => 12,
                'id_pelanggan' => 1,
                'products_id' => 7,
            ],
        ]);
    }
}
