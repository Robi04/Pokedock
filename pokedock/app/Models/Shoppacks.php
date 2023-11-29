<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_shoppack',
        'price_shoppack',
        'nb_credit_shoppack',
        'path_img_shoppack',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'name_shoppack' => 'string',
        'price_shoppack' => 'float',
        'nb_credit_shoppack' => 'integer',
        'path_img_shoppack' => 'string',
    ];
}