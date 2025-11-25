<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'id_order';

    protected $fillable = [
        'nama_pelanggan',
        'email',
        'total',
        'status',
        'metode_pembayaran',
        'tanggal'
    ];

    public $timestamps = false;
}
