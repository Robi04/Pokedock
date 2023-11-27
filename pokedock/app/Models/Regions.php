<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $fillable = [
        'label_region',
        'path_img_region',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'label_fregion' => 'string',
        'path_img_region' => 'string',
    ];
}
