<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_type',
        'path_img_type',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'label_type' => 'string',
        'path_img_type' => 'string',
    ];
}
