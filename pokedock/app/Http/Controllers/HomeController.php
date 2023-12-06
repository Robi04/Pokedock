<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function showAll(): View {
        $name = Auth::user()->name; 
        return view('home.index', compact('name'));
    }
}
