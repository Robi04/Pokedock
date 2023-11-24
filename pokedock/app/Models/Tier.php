<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_tier',
        'path_img_tier',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'label_tier' => 'string',
        'path_img_tier' => 'string',
    ];
}
