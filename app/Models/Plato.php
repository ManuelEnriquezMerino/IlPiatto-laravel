<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsToMany('Categoria','categoria_plato');
    }

    public function restricciones(){
        return $this->belongsToMany('Restriccion','plato_restriccion');
    }
}
