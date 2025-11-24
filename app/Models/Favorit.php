<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    protected $table = 'favorit';
    protected $fillable = ['id_pelanggan', 'products_id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pelanggan');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
