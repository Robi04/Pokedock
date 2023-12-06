<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItems;
use App\Models\UserOrders;
use App\Models\Shoppacks;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        
        OrderItems::truncate();
        
        $userOrders = UserOrders::all();
        
        foreach ($userOrders as $userOrder) {
            $orderItem = new OrderItems([
                'id_user_order' => $userOrder->id_user_order,
                'id_shoppack' => Shoppacks::inRandomOrder()->first()->id_shoppack,
                'quantity' => rand(1, 5), 
            ]);

            $orderItem->save();
        }
    }
}
