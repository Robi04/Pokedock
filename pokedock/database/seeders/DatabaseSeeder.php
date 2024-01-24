<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(UserOrdersTableSeeder::class);
        $this->call(ShoppacksTableSeeder::class);
        //$this->call(OrderItemsTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(PokemonsTableSeeder::class);
        $this->call(PokemonTypesTableSeeder::class);
    }
}
