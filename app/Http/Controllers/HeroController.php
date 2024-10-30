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
}
