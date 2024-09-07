<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;

    //definir la clave primaria
    
    protected $primaryKey = 'id_finca';

    //Definir los atributos que pueden ser asigandos masivamente
    protected $fillable=[
        'nombre',
        'latitud',
        'longitud',
        'location',
        'user_id',
        'propietario'
    ];

    // relacion con el modelo user(Un usuario puede tener varias finacas)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //Relacion con el modelo
    public function fincas()
    {
        return $this->hasMany(Lote::class, 'id_finca');
    }
}
