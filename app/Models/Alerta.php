<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

class Alerta extends Model
{
    use HasFactory;

    protected $table = 'alertas'; // Asegúrate de que la tabla en la base de datos se llama 'alertas'
    protected $primaryKey = 'id_alerta'; // Define la clave primaria
    public $incrementing = true; // La clave primaria es auto-incremental
    protected $keyType = 'bigint'; // Tipo de clave primaria

    protected $fillable = [
        'fecha_hora',
        'tipo_alerta',
        'valor_registrado',
        'descripcion',
         'id_registro',
    ];

    //Relacion con el modelo Registro(una alerta pertenece a un registrop)
    public function registro()
    {
        return $this->belongsTo(Registro::class, 'id_registro');
    }
    protected $casts = [
        
        'fecha_hora' => 'datetime', // Esto convierte `fecha_hora` a un objeto Carbon
        'id_alerta' => 'integer', // Corregido para usar 'integer'
    ];
}
