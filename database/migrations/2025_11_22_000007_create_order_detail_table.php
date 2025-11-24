<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id_detail');
            $table->unsignedInteger('id_order');
            $table->unsignedInteger('id_produk');
            $table->string('nama_produk', 255);
            $table->string('brand', 255)->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('ukuran', 100)->nullable();
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('subtotal');

            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
