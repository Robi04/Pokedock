<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_type',
        'id_pokemon',
    ];

}
