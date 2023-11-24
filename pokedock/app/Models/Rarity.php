<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_rarity',
        'path_img_rarity',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'label_rarity' => 'string',
        'path_img_rarity' => 'string',
    ];
}
