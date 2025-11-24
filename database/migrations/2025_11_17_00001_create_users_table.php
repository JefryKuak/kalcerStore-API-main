<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_pelanggan');
            $table->string('fullname', 50);
            $table->string('email', 50);
            $table->string('foto_profil')->nullable();
            $table->char('whatsapp', 13);
            $table->string('password');
            $table->enum('role', ['user', 'admin'])->default('user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
