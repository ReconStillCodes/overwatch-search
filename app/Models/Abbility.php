<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Abbility extends Model
{
    use HasFactory;

    public function hero(){
        return $this->belongsTo(Hero::class, 'id');
    }
}
