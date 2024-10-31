<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function getALLHero(){
        return Hero::all();
    }

    public function getFilterHero($filter){
        return Hero::where('name', 'LIKE', "%{$filter}%")->get();
    }

    public function getHero($id){
       $h =  Hero::where('id' ,  $id)->first();
       return $h;
    }

    public function getAllRoleHeroes($id){
        return Hero::where('role', $id)->get();
    }
}
