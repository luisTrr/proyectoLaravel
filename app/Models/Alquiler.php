<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $fillable = [
        'titulo', 'direccion', 'precio', 'usuario_id', 'tipo_alquiler_id', 'recurso_id','adventista','celular','descripcion',
    ];
    protected $table = 'alquileres'; 
    public $timestamps = false;
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
