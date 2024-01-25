<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use App\Models\Pokedex;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Regions;
use App\Models\Types;
use App\Models\PokemonTypes;



class PokemonsController extends Controller
{
    public function showAll(Request $request): View
    {
        $regions = Regions::all();
        $region = $request->input('region');
        $query = Pokemons::query();

        if ($region) {
            $query->where('id_region', $region);
        }

        $pokemons = $query->simplePaginate(200);

        $userCaughtPokemonIds = Pokedex::where('id_user', auth()->user()->id)
                                    ->where('catched', true)
                                    ->pluck('id_pokemon')
                                    ->toArray();

        return view('pokedex.index', [
            'pokemons' => $pokemons,
            'user' => auth()->user(),
            'userCaughtPokemonIds' => $userCaughtPokemonIds,
            'regions' => $regions,
        ]);
    }

    public function showCatchPage(): View {
        $credit = auth()->user()->credit;
        return view('pokemon.index', ['credit' => $credit, 'user' => auth()->user()]);
    }

    public function catchPokemons(Request $request)
    {
        $numberToCatch = $request->input('nbrPokemons');

        $pokemonsToUpdateIds = Pokedex::where('id_user', auth()->user()->id)
                                      ->where('catched', false)
                                      ->inRandomOrder()
                                      ->take($numberToCatch)
                                      ->pluck('id_pokemon')
                                      ->toArray();

        if (!empty($pokemonsToUpdateIds)) {
            Pokedex::whereIn('id_pokemon', $pokemonsToUpdateIds)
                   ->update(['catched' => true]);
        }
        user::where('id', auth()->user()->id)->decrement('credit', $numberToCatch);

        return redirect('/catched-pokemons')->with('caughtPokemonIds', $pokemonsToUpdateIds);
    }

    public function showCatchedPokemons()
    {
        $caughtPokemonIds = session('caughtPokemonIds');
        $caughtPokemons = Pokedex::join('pokemons', 'pokemons.id_pokemon', '=', 'pokedexes.id_pokemon')
                             ->whereIn('pokemons.id_pokemon', $caughtPokemonIds)
                             ->where('id_user', auth()->user()->id)
                             ->select('*') // Select columns from the pokemons table
                             ->get();
        return view('catched-pokemons', ['caughtPokemons' => $caughtPokemons]);

    }
}
