<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummonPacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_summonpack',
        'proba_bad_summon',
        'proba_mid_summon',
        'proba_legendary_summon',
    ];

    protected $hidden = [];

    protected $casts = [
        'price_summonpack' => 'float',
        'proba_baad_summon' => 'float',
        'proba_mid_summon' => 'float',
        'proba_legendary_summon' => 'float',
    ];
}
