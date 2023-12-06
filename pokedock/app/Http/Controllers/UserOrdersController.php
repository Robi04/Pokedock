<?php
 
namespace App\Http\Controllers;
 
use App\Models\UserOrders;
use Illuminate\View\View;
 
class UserOrdersController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        return view('user_orders.index', [
            'user_orders' => UserOrders::all()
            
        ]);
    }
}