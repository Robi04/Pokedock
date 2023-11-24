<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_shoppack',
        'nb_credit_shoppack',
        'path_img_shoppack',
    ];

    protected $hidden = [];

    protected $casts = [
        'price_shoppacks' => 'float',
        'nb_credit_shoppack' => 'integer',
        'path_img_shoppack' => 'string',
    ];
}
