<?php

namespace Database\Seeders;

use App\Models\Abbility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('data/abbility.json'));
        $data = json_decode($json, true);

        foreach($data as $d){
            Abbility::create([
                'hero_id' => $d['hero_id'],
                'no' => $d['no'],
                'name' => $d['name']
            ]);
        }
    }
}
