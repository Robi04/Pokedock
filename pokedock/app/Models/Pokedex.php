<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [
        'id_user',
        'id_pokemon',
        'nb_candy_family',
        'catched',
    ];

    protected $hidden = [];

    protected $casts = [
        'id_user' => 'integer',
        'id_pokemon' => 'integer',
        'nb_candy_family' => 'integer',
        'catched' => 'boolean',
    ];
}
