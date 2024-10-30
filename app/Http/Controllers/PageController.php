<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RoleController;

class PageController extends Controller
{
    protected $roleController;

    public function __construct()
    {
        $this->roleController = app(RoleController::class);
    }

    public function toHome(){
        $roles = $this->roleController->getAllRoles();
        return view('home', compact('roles'));
    }
}
