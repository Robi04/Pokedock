<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemons;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class PokemonsTableSeeder extends Seeder
{
    public function run()
    {
        $jsonPath = __DIR__.'/../seeds/pokemons_full_details_updated_fam_chained.json';
        if (File::exists($jsonPath)) {
            // Get the file contents and decode it
            $jsonData = json_decode(File::get($jsonPath), true);

            foreach ($jsonData as $item) {
                $evolv_fr = '';
                $evolv_to='';
                if ($item['evolve_from']==="") {
                    $evolv_fr = NULL;
                }
                else{
                    $evolv_fr = $item['evolve_from'];
                 }
                if ($item['evolve_to']==="") {
                    $evolv_to = NULL;
                }
                else{
                    $evolv_to = $item['evolve_to'];
                 }

                DB::table('pokemons')->insert([
                    'id_pokemon' => $item['id'],
                    'name_pokemon' => $item['name'],
                    'id_family' => $item['family_id'],
                    'id_tier'=> $item['tier'],
                    'id_region'=> $item['region_id'],
                    'path_img_pokemon' => NULL,
                    'id_evolve_from' => $evolv_fr,
                    'id_evolve_to' => $evolv_to

                ]);
            }

        }


    }
}

