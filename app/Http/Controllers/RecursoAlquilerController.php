<?php

namespace App\Http\Controllers;

// app/Http/Controllers/RecursoAlquilerController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecursoAlquiler;

class RecursoAlquilerController extends Controller
{
    public function index()
    {
        $recursosAlquiler = RecursoAlquiler::all();
        return view('recursos_alquiler.index', compact('recursosAlquiler'));
    }

    public function create()
    {
        return view('recursos_alquiler.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'wifi' => 'required|boolean',
            'agua_caliente' => 'required|boolean',
        ]);

        RecursoAlquiler::create($validatedData);

        return redirect()->route('recursos-alquiler.index')->with('success', 'Recurso de Alquiler creado exitosamente.');
    }

    // Resto de las funciones para editar y eliminar
}

