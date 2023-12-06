<?php
 
namespace App\Http\Controllers;
 
use App\Models\Shoppacks;
use Illuminate\View\View;
 
class ShoppacksController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        return view('shoppacks.index', [
            'shoppacks' => Shoppacks::all()
            
        ]);
    }
}