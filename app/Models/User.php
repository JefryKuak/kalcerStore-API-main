<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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
}
