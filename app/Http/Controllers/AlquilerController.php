<?php

// app/Http/Controllers/AlquilerController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('alquileres.index', compact('alquileres'));
    }

    public function create()
    {
        return view('alquileres.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|max:100',
            'direccion' => 'required|max:200',
            'precio' => 'required|numeric',
            'usuario_id' => 'required|exists:usuarios,id',
            'tipo_alquiler_id' => 'required|exists:tipo_alquileres,id',
            'recurso_alquiler_id' => 'required|exists:recurso_alquileres,id',
        ]);

        Alquiler::create($validatedData);

        return redirect()->route('alquileres.index')->with('success', 'Alquiler creado exitosamente.');
    }

    // Resto de las funciones para editar y eliminar
}

