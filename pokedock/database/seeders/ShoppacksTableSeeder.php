<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppacksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('shoppacks')->insert([
            'name_shoppack' => 'Starter',
            'price_shoppack' => 0.99,
            'nb_credit_shoppack' => 5
        ]);

        DB::table('shoppacks')->insert([
            'name_shoppack' => 'Medium',
            'price_shoppack' => 1.49,
            'nb_credit_shoppack' => 10
        ]);

        DB::table('shoppacks')->insert([
            'name_shoppack' => 'Or',
            'price_shoppack' => 4.99,
            'nb_credit_shoppack' => 100
        ]);
    }
}
