<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'humedad',
        'temperatura',
        'fecha',
        'hora',
        'id_sensor',
    ];

    //Relacion con el modelo Dispositivo (Un registro pertenece a un dispositivos)
    public function dispositivo()
    {
        return $his->belongsTo(Dispositivo::class, 'id_sensor');
    }

    //Relacion con el modelo Alerta (un registro tiene muchas alertas)
    public function alertas()
    {
        return $this->hasMany(Alerta::class, 'id_registro');
    }
}
