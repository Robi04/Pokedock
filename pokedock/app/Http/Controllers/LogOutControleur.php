<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogOutControleur extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
