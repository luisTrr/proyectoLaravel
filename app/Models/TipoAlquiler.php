<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAlquiler extends Model
{
    protected $table = 'tiposalquiler';
    protected $fillable = [
        'tipo', 
    ];
    public $timestamps = false;
    use HasFactory;
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}
