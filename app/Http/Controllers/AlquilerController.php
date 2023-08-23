<?php

// app/Http/Controllers/AlquilerController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;
use App\Models\Usuario;
use App\Models\TipoAlquiler;
use App\Models\RecursoAlquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('alquileres.index', compact('alquileres'));
    }
    public function create()
    {
        $recursosAlquiler = RecursoAlquiler::all();
        $usuarios = Usuario::all(); // Obtén la lista de usuarios
        $tiposAlquiler = TipoAlquiler::all(); // Obtén la lista de tipos de alquiler
        return view('alquileres.create', compact('usuarios', 'tiposAlquiler', 'recursosAlquiler'));
    }
    // public function create()
    // {
    //     return view('alquileres.create');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_alquiler_id' => 'required|exists:tiposalquiler,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'titulo' => 'required|max:100',
            'descripcion' => 'required|max:200',
            'celular' => 'required|numeric',
            'direccion' => 'required|max:200',
            'precio' => 'required|numeric',
            'recursos_id' => 'required|exists:recursosalquiler,id',
            'adventista' => 'required|boolean',    
        ]);

        Alquiler::create($validatedData);

        return redirect()->route('alquileres.index')->with('success', 'Alquiler creado exitosamente.');
    }

    // Resto de las funciones para editar y eliminar
}

