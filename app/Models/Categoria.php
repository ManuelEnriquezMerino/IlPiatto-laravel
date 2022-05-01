<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function platos(){
        return $this->belongsToMany('Plato','categoria_plato');
    }

    public function restricciones(){
        return $this->belongsToMany('Restriccion','plato_restriccion');
    }
}
