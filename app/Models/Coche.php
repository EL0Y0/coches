<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Coche extends Model
{
    use HasFactory;

    public function scopePrecioMaximo($query, $precio){
        if ($precio !== null && $precio !== '') {
            return $query->where('precio', '<=', $precio);
        }
        return $query;
    }

    public function scopeAnioMinimo($query, $anio){
        if ($anio !== null && $anio !== '') {
            return $query->where('anio', '>=', $anio);
        }
        return $query;
    }
    protected $fillable = ['marca', 'modelo', 'precio', 'anio'];

}


