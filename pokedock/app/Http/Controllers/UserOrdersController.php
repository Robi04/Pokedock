<?php
 
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showInsertForm()
    {
        $donnees = DB::select('select * from users');
        return view('insert-form', ['donnees' => $donnees]);
    }

    public function insertData(Request $request)
    {
        // Vous pouvez ajouter ici la validation des données d'entrée si nécessaire
        $id = 1;
        $name = 'Dayle';

        DB::insert('insert into users (id, name) values (?, ?)', [$id, $name]);

        return redirect()->back()->with('success', 'Données insérées avec succès!');
    }
}
