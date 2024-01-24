<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use App\Models\Pokedex;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class PokemonsController extends Controller
{
    public function showAll(): View
    {
        $userCaughtPokemonIds = Pokedex::where('id_user', auth()->user()->id)
            ->where('catched', true)
            ->pluck('id_pokemon')
            ->toArray();

        return view('pokemon.index', [
            'pokemons' => DB::table('pokemons')->simplePaginate(200),
            'user' => auth()->user(),
            'userCaughtPokemonIds' => $userCaughtPokemonIds,
        ]);
    }
}
