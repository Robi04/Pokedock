<?php
 
namespace App\Http\Controllers;
 
use App\Models\OrderItems;
use Illuminate\View\View;
 
class OrderItemsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        return view('order_items.index', [
            'order_items' => OrderItems::all()
            
        ]);
    }
}