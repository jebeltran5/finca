<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_lote'; // Nombre de la columna primaria

    protected $fillable = [
        'nombre',
        'dimension',
        'id_finca',
    ];

    //relacion con el modelo finca(un lote pertenece a una finca)
    public function finca()
    {
        return $this ->belongsTo(Finca::class, 'id_finca');
    }

    //relacion con el modelo cultivo (un lote tiene muchos cultuvos)
    public function cultivos()
    {
        return $this->hasMany(Cultivo::class, 'id_lote');
    }
}
