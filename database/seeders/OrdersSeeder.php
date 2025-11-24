<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            ['id_order' => 1, 'nama_pelanggan' => 'siapis', 'email' => 'kiel123@gmail.com', 'total' => 1099000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-20 21:10:22'],
            ['id_order' => 2, 'nama_pelanggan' => 'Yehezkiel Hatoguan Siahaan', 'email' => 'kiel123@gmail.com', 'total' => 899000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-20 21:13:54'],
            ['id_order' => 3, 'nama_pelanggan' => 'Kiel', 'email' => 'kiel123@gmail.com', 'total' => 3300000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-20 21:55:06'],
            ['id_order' => 4, 'nama_pelanggan' => 'yehezkiel', 'email' => 'kiel123@gmail.com', 'total' => 5029000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 12:03:30'],
            ['id_order' => 5, 'nama_pelanggan' => 'stepen', 'email' => 'kiel123@gmail.com', 'total' => 230000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 12:06:58'],
            ['id_order' => 6, 'nama_pelanggan' => 'stepen', 'email' => 'kiel123@gmail.com', 'total' => 230000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 12:10:45'],
            ['id_order' => 7, 'nama_pelanggan' => 'Noel Anggit', 'email' => 'noel@gmail.com', 'total' => 1099000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 19:26:14'],
            ['id_order' => 8, 'nama_pelanggan' => 'noel lele', 'email' => 'noel@gmail.com', 'total' => 1729000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 22:04:22'],
            ['id_order' => 9, 'nama_pelanggan' => 'noel ma', 'email' => 'noel@gmail.com', 'total' => 3300000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 22:16:57'],
            ['id_order' => 10, 'nama_pelanggan' => 'noelos', 'email' => 'noel@gmail.com', 'total' => 3300000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 22:52:06'],
            ['id_order' => 11, 'nama_pelanggan' => 'Samuel CRUD', 'email' => 'noel@gmail.com', 'total' => 3300000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 23:09:31'],
            ['id_order' => 12, 'nama_pelanggan' => 'Kiel MVC', 'email' => 'noel@gmail.com', 'total' => 2099000, 'status' => 'Berhasil', 'metode_pembayaran' => 'va', 'tanggal' => '2025-11-21 23:11:44'],
        ]);
    }
}
