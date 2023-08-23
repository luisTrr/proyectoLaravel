<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAlquiler extends Model
{
    protected $fillabe = [
        'tipo',
    ];
    protected $table = 'tiposalquiler'; 
    use HasFactory;
    public $timestamps = false;
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}
