<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = 'dispositivos'; // Nombre de la tabla
    protected $primaryKey = 'id_sensor'; // Nombre de la columna de la clave primaria
    public $incrementing = false; // Si tu clave primaria no es auto-incremental
    protected $keyType = 'string'; // Tipo de clave primaria

    protected $fillable =[
        'temperatura',
        'humedad',
        'fecha',
        'hora',
        'id_sensor'
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
