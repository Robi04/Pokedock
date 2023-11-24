<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use Illuminate\View\View;


class PokemonsController extends Controller
{
    public function show(string $id): View
    {
        return view('pokemon', [
            'pokemon' => Pokemons::findOrFail($id),
            'pokemons' => Pokemons::all()
        ]);
    }
}
