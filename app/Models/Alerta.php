<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_hora',
        'tipo_alerta',
        'valor_registrado',
        'descripcion',
         'id_regitro',
    ];

    //Relacion con el modelo Registro(una alerta pertenece a un registrop)
    public function registro()
    {
        return $this->belongsTo(Registro::class, 'id_registro');
    }
}
