<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_cosecha',
        'cantidad',
        'estado',
        'id_cultivo',
    ];

    //Relacion con el modelo Cultivo (Una produccion pertenece a un cultivo)
    public function cultivo()
    {
        return this->belongTo(Cultivo::class, 'id_cultivo');
    }
}
