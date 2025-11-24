<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('brand', 100)->nullable();
            $table->string('image')->nullable();
            $table->text('deskripsi')->nullable();
            $table->longText('warna')->nullable();
            $table->longText('ukuran')->nullable();
            $table->decimal('rating', 2, 1)->nullable();
            $table->integer('stok')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
