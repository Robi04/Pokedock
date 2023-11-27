<?php

use Illuminate\Database\Seeder;
use App\Models\OrderItems;
use App\Models\Shoppacks;

class OrderItemsSeeder extends Seeder
{
    public function run()
    {
        $shoppackIds = Shoppacks::pluck('id_shoppack');

        // Insérez des données dans la table order_item
        foreach ($shoppackIds as $shoppackId) {
            OrderItem::create([
                'id_shoppack' => $shoppackId,
                
            ]);
        }
    }
}
