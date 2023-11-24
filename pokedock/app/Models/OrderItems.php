<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_order',
        'id_shoppack',
    ];

    public function order()
    {
        return $this->belongsTo(UserOrder::class, 'id_order');
    }

    public function shoppack()
    {
        return $this->belongsTo(Shoppack::class, 'id_shoppack');
    }

    protected $hidden = [];
}
