<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_cultivo',
        'fecha_siembra',
        'estado',
    ];

    //relacion con el modelo lote(Un cultivo a un lote)
    public function lote()
    {
        return $this->belongsTo(Lote::class, 'id_lote');
    }

    //relacion con el Produccion (Un cultivo tiene muchas producciones)
    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id_cultivo');
    }

    //relacion con el modelo estacion(Un cultivo tiene muchas estaciones)
    public function estaciones()
    {
        return $this->hasMany(Estacion::class, 'id_cultivo');
    }
}

