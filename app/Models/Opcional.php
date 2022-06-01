<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcional extends Model
{
    use HasFactory;

    protected $table = 'opcionales';

    public function plato()
    {
        return $this->belongsTo('App\Models\Plato');
    }
}
