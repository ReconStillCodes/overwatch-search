<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('data/hero.json'));
        $data = json_decode($json, true);

        foreach($data as $d){
            Hero::create([
                'name' => $d['name'],
                'subtitle' => $d['subtitle'],
                'description' => $d['description'],
                'role' => $d['role'],
                'folder' => $d['folder'],
                'landscape' => $d['landscape'],
                'potrait' => $d['potrait'],
                'profile' => $d['profile'],
            ]);
            
        }
    }
}
