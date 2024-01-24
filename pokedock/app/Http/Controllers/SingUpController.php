<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

use App\Notifications\VerifyEmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\DB; // Import the DB facade


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

        $id_user = DB::select('SELECT MAX(id) FROM users;');
        $id_user = intval($id_user[0]->{'MAX(id)'});
        DB::update('UPDATE users SET fidelity_point = ? WHERE id = ?', [0, $id_user]);


        return redirect()->route('login')->with('success', 'Your account has been created. You can now log in.');
    }
}

