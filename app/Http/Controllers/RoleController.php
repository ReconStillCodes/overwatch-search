<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getAllRoles(){
        return Role::get();
    }

    public function getRole($id){
        return Role::where('id', $id)->first();
    }
}
