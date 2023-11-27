<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Families extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_family',
        'nb_candy_family',
        'path_img_family',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'label_family' => 'string',
        'nb_candy_family' => 'integer',
        'path_img_family' => 'string',
    ];
}
