<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PokemonTypes;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;



class PokemonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = __DIR__.'/../seeds/pokemons_full_details_updated_fam_chained.json';
        if (File::exists($jsonPath)) {
            // Get the file contents and decode it
            $jsonData = json_decode(File::get($jsonPath), true);

            foreach ($jsonData as $item) {
                foreach ($item['type_id'] as $type) {
                    DB::table('pokemon_types')->insert([
                        'id_pokemon' => $item['id'],
                        'id_type' => $type,
                    ]);
                }
            }
        }
    }
}


