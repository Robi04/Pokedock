<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function showAll()
    {
        $user_info = Auth::user();
        Log::info($user_info);
        return view('profil.index', compact('user_info'));
    }
}
