<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->string('nama_pelanggan', 100);
            $table->string('email', 100);
            $table->integer('total');
            $table->string('status', 20)->default('Berhasil');
            $table->string('metode_pembayaran', 20);
            $table->dateTime('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
