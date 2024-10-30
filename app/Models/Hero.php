<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    public function abillities(){
        return $this->hasMany(Abbility::class, 'hero_id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'id');
    }
}
