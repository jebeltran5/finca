<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable =[
        'tipo_sensor',
        'estado',
        'id_estacion',
    ];

    //relacion con el modelo Estacion (un dispositivo pertenece a una estascio)
    public function estacion()
    {
        return $this->belongsTo(Estacion::class, 'id_estacion');
    }

    //Relacion con el modelo Registro (Un dispositivo tiene muchos Registro)
    public function registro()
    {
        return $this->hasMany(Registro::class, 'id_sensor');
    }
}
