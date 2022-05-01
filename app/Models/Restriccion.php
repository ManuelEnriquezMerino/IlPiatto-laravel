<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restriccion extends Model
{
    use HasFactory;
    
    public function platos(){
        return $this->belongsToMany('Plato','plato_restriccion');
    }
}
