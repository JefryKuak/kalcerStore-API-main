<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;

    protected $fillable = [
        'fullname',
        'email',
        'foto_profil',
        'whatsapp',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function favorit()
    {
        return $this->hasMany(Favorit::class, 'id_pelanggan');
    }

    // JWT FUNCTIONS
    public function getJWTIdentifier()
    {
        return $this->getKey();  // otomatis pakai id_pelanggan
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
