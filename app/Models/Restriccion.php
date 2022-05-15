<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restriccion extends Model
{
    use HasFactory;

    protected $table = 'restricciones';

    public function platos(){
        return $this->belongsToMany('Plato','plato_restriccion');
    }
}
