<?php
 
namespace App\Http\Controllers;
 
use App\Models\OrderItems;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use PDF;


 
class OrderItemsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function showAll(): View
    {
        $id_user = Auth::user() -> id;
        $donnees = DB::select("SELECT * FROM order_items WHERE id_user = $id_user;");
        $donneesShopPack = DB::select("SELECT id_shoppack, price_shoppack FROM shoppacks;");
        return view('order_items.index', compact(['donnees', 'donneesShopPack']));
    }

    public function addItem(Request $req)
    {
 
        $id_item = DB::select('SELECT MAX(id_order_item) FROM order_items;');
        //$id_item = intval($id_item[0]) + 1;
        $id_user = Auth::user() -> id;
        $id_item = intval($id_item[0]->{'MAX(id_order_item)'}) + 1;

        DB::insert('insert into order_items (id_order_item, id_user, id_shoppack, quantity) values (?, ?, ?, ?)', [$id_item, $id_user, $req -> shoppack_id, $req -> number]);

        return redirect()->route('order_items');
    }

    public function delItem(Request $req)
    {
        $id_user = Auth::user() -> id;
        $id_item = $req->id_order_item;
        DB::delete("DELETE FROM order_items WHERE id_user = ? AND id_order_item = ?", [$id_user, $id_item]);
        return redirect()->back();
        
    }

    public function delAllItem()
    {
        $id_user = Auth::user() -> id;
        DB::delete("DELETE FROM order_items WHERE id_user = ?", $id_user);
        return redirect()->back();        
    }

    // public function generateInvoice()
    // {
    //     $id_user = Auth::user() -> id;
    //     $donnees = DB::select("SELECT * FROM order_items WHERE id_user = $id_user;");
    //     $donneesShopPack = DB::select("SELECT id_shoppack, price_shoppack FROM shoppacks;");
    //     $data = ['title' => 'Votre facture',
    //              'donnees' => $donnees,
    //              'donneesShopPack' =>  $donneesShopPack
    //             ];

    //     $pdf = PDF::loadView('pdf.index', $data);

    //     return $pdf->stream('example.pdf');
    // }

    public function placeOrder(Request $req)
    {
        $id_user = Auth::user() -> id;

        DB::table('users')->where('id', '=', $id_user)->increment('fidelity_point', round($req->prixTot, 0));

        $donnees = DB::select("SELECT * FROM order_items WHERE id_user = $id_user;");
        $donneesShopPack = DB::select("SELECT id_shoppack, price_shoppack FROM shoppacks;");

        $data = ['title' => 'Votre facture',
                 'donnees' => $donnees,
                 'donneesShopPack' =>  $donneesShopPack
                ];
        $pdf = PDF::loadView('pdf.index', $data);

        DB::table('order_items')->where('id_user', '=', $id_user)->delete();

        return redirect('/dashboard');
    }
}