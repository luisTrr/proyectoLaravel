<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', // Agregado 'nombre' aquí
        'correo',
        'tipo',
        // Otros atributos permitidos
    ];
    public $timestamps = false;
    use HasFactory;
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}
