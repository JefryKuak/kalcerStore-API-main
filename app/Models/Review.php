<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'product_id',
        'id_pelanggan',
        'rating',
        'comment',
        'nama_pelanggan'
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pelanggan', 'id_pelanggan');
    }
}
