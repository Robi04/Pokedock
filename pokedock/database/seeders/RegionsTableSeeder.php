<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Model\Regions;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jsonPath = __DIR__.'/../seeds/regions.json';
        if (File::exists($jsonPath)) {
            // Get the file contents and decode it
            $jsonData = json_decode(File::get($jsonPath), true);

            foreach ($jsonData as $item) {
                DB::table('regions')->insert([
                    'id_region' => $item['id'],
                    'label_region' => $item['name'],
                    'path_img_region'=> Null,
                ]);
            }
        }

    }
}

