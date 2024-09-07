<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
    use HasFactory;

    protected $table = 'estaciones';
    // Especificar el nombre de la columna de la clave primaria
    protected $primaryKey = 'id_estacion';

    // Si tu clave primaria no es un entero auto-incremental
    public $incrementing = false;

    // Especificar el tipo de la clave primaria (por ejemplo, string)
    protected $keyType = 'string';

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
        return $this->hasMany(Dispotivo::class, 'id_estacion');
    }
}
