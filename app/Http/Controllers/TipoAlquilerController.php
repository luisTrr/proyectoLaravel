<?php

// app/Http/Controllers/TipoAlquilerController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAlquiler;

class TipoAlquilerController extends Controller
{
    public function index()
    {
        $tiposAlquiler = TipoAlquiler::all();
        return view('tipos_alquiler.index', compact('tiposAlquiler'));
    }

    public function create()
    {
        return view('tipos_alquiler.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|max:50',
        ]);

        TipoAlquiler::create($validatedData);

        return redirect()->route('tipos-alquiler.index')->with('success', 'Tipo de Alquiler creado exitosamente.');
    }

    // Resto de las funciones para editar y eliminar
}

