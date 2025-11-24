<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'brand',
        'image',
        'deskripsi',
        'warna',
        'ukuran',
        'rating',
        'stok'
    ];
    public $timestamps = false;

    public function favorit()
    {
        return $this->hasMany(Favorit::class, 'products_id');
    }
}
