<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $table = 'producciones';
    protected $primaryKey = 'id_produccion';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'fecha_cosecha',
        'cantidad',
        'estado',
        'id_cultivo',
    ];
     
     //Atributos que deben ser convertidos a tipos nativos de PHP
     protected $casts = [
        'fecha_cosecha' => 'date',
        'cantidad' => 'decimal:2',
     ];
    //Relacion con el modelo Cultivo (Una produccion pertenece a un cultivo)
    public function cultivo()
    {
        return $this->belongsTo(Cultivo::class, 'id_cultivo');
    }
}
