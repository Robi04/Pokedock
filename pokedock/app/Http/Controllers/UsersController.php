<?php
 
namespace App\Http\Controllers;
 
use App\Models\Users;
use Illuminate\View\View;
 
class UsersController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        return view('users.index', [
            'users' => Users::all()
            
        ]);
    }
}