<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use App\Models\User;

class SingUpController extends Controller
{
    public function showAll(): View
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        for ($pokemonId = 1; $pokemonId <= 493; $pokemonId++) {
            Pokedex::create([
                'id_user' => $user->id,
                'id_pokemon' => $pokemonId,
                'nb_candy_family' => 0,
                'catched' => false,
            ]);
        }


        return redirect()->route('login')->with('success', 'Your account has been created. You can now log in.');
    }
}
