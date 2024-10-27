<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('data/role.json'));
        $data = json_decode($json, true);

        foreach($data as $d){
            Role::create([
                'name' => $d['name'],
                'subtitle' => $d['subtitle'],
                'description' => $d['description'],
                'passive' => $d['passive'],
                'banner' => $d['banner'],
                'img' => $d['img']
            ]);
        }
    }
}
