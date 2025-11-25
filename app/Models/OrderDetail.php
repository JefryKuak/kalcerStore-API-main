<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id_detail';

    protected $fillable = [
        'id_order',
        'id_produk',
        'nama_produk',
        'brand',
        'warna',
        'ukuran',
        'qty',
        'harga',
        'subtotal'
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produk');
    }
}
