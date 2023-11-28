<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user_order',
        'id_shoppack',
        'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(UserOrders::class, 'id_user_order');
    }

    public function shoppack()
    {
        return $this->belongsTo(Shoppacks::class, 'id_shoppack');
    }

    public $timestamps = false;

    protected $hidden = [];

    protected $casts = [
        'quantity' => 'integer',
    ];
}