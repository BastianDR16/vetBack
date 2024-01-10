<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaasdaddaController extends Controller
{
    public function index()
{
    $mascotas = Mascota::all();
    return view('mascotas.index', compact('mascotas'));
}

    public function create()
    { 
        $clientes = Cliente::all();
        return view('mascotas.create', compact('clientes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'especie' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'diagnostico' => 'required',
            'tratamiento' => 'required',
            'notas_adicionales' => 'nullable',
            'id_cliente' => 'required|exists:clientes,id',
        ]);

        
        Mascotas::create($request->all());
        return redirect()->route('mascotas.index')->with('success', 'Mascota creada exitosamente.');
    }
}
