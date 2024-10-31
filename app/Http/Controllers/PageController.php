<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RoleController;

class PageController extends Controller
{
    protected $roleController;
    protected $heroController;
    protected $abbilityController;

    public function __construct()
    {
        $this->roleController = app
        (RoleController::class);
        $this->heroController = app(HeroController::class);
        $this->abbilityController = app(AbbilityController::class);
    }

    protected function getAllRoles(){
        return $this->roleController->getAllRoles();
    }

    public function toHome(){
        $roles = $this->getAllRoles();
        $heroes = $this->heroController->getAllHero();
        return view('home', compact('roles', 'heroes'));
    }

    public function searchHeroes(Request $request){
        $roles = $this->getAllRoles();
        $filter = $request->input('search');
        $heroes = $this->heroController->getFilterHero($filter);

        return view('home', compact('roles', 'heroes'));
    }

    public function toHero($hero_id){
        $roles = $this->getAllRoles();
        $hero = $this->heroController->getHero($hero_id);
        $abilities = $this->abbilityController->getAbbilities($hero_id);
        return view('hero', compact('roles', 'hero', 'abilities'));
    }

    public function toRole($id){
        $roles = $this->getAllRoles();
        $role = $this->roleController->getRole($id);
        $heroes = $this->heroController->getAllRoleHeroes($id);
        return view('role', compact('roles', 'role', 'heroes'));
    }
}
