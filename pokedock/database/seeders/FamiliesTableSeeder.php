<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Families;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;



class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = __DIR__.'/../seeds/families.json';
        if (File::exists($jsonPath)) {
            // Get the file contents and decode it
            $jsonData = json_decode(File::get($jsonPath), true);

            foreach ($jsonData as $item) {
                DB::table('families')->insert([
                    'id_family' => $item['id'],
                    'label_family' => $item['name'],
                    'path_img_family'=> Null
                ]);
            }
        }
    }
}


