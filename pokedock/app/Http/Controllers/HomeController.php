<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function showAll(): View {
        return view('home.index');
    }
}
