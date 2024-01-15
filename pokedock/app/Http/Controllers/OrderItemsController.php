<?php
 
namespace App\Http\Controllers;
 
use App\Models\OrderItems;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Auth;

 
class OrderItemsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        $donnees = DB::select('SELECT * FROM order_items;');  
        $id_user = Auth::user() -> id;
        return view('order_items.index', compact('id_user'));
    }

    public function addItem(Request $req)
    {
        $id_pack = $req->id_pack;
        $amount = $req -> amount;
        $id_panier = 
        $id_item = DB::select('SELECT MAX(id_order_item) FROM order_items;');
        $id_item += 1;


    }
}