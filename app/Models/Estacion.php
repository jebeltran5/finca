<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_estacion',
        'latitud',
        'longitud',
        'fecha_instalacion',
        'id_cultivo',
    ];

    //Relacion con el modelo cultivo (una estacion pertenece a un cultivo)
    public function cultivo()
    {
        return $this->belongsTo(Cultivo::class, 'id_cultivo');
    }

    //relacion con el modelo Dispositivo (una estacion tiene muchos dispostivos)
    public function dispositivos()
    {
        return $this->hasMany(Dispotivos::class, 'id_estacion');
    }
}
