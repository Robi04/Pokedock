<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_rarity',
        'id_family',
        'id_evolve_from',
        'id_evolve_to',
        'id_tier',
        'id_region',
        'path_img_pokemon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'id_rarity');
    }


    public function family()
    {
        return $this->belongsTo(Family::class, 'id_family');
    }



    public function tier()
    {
        return $this->belongsTo(Tier::class, 'id_tier');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region');
    }

    protected $hidden = [];

    protected $casts = [
       'path_img_pokemon' => 'string',
    ];
}
