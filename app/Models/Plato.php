<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    public function opcionales(){
        return $this->hasMany('App\Models\Opcional');
    }

    public function categorias(){
        return $this->belongsToMany('App\Models\Categoria','categoria_plato');
    }

    public function restricciones(){
        return $this->belongsToMany('App\Models\Restriccion','plato_restriccion');
    }
}
