<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';
    use HasFactory;
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function recursoAlquiler()
    {
        return $this->belongsTo(RecursoAlquiler::class);
    }
    public function tipoAlquiler()
    {
        return $this->belongsTo(TipoAlquiler::class);
    }
}
