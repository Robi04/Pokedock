<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jsonPath = __DIR__.'/../seeds/types.json';
        if (File::exists($jsonPath)) {
            // Get the file contents and decode it
            $jsonData = json_decode(File::get($jsonPath), true);

            foreach ($jsonData as $item) {
                DB::table('types')->insert([
                    'id_type' => $item['id'],
                    'label_type' => $item['name'],
                    'path_img_type'=> Null
                ]);
            }
        }

    }
}
