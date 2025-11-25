<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Sesuaikan nama tabel dan primary key
    protected $table = 'users';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;

    // Field yang bisa diisi massal
    protected $fillable = [
        'fullname',
        'email',
        'foto_profil',
        'whatsapp',
        'password',
        'role'
    ];

    // Relasi ke favorit
    public function favorit()
    {
        // relasi hasMany ke tabel favorit
        return $this->hasMany(Favorit::class, 'id_pelanggan', 'id_pelanggan');
    }

    // // Relasi ke review
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class, 'id_pelanggan', 'id_pelanggan');
    // }

    // Hidden fields (misal password)
    protected $hidden = [
        'password'
    ];
}
