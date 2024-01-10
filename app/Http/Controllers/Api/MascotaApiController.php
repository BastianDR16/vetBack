<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaApiController extends Controller
{
    public function index()
{
    $mascotas = Mascota::all();
    return response()->json($mascotas);
}

public function show(Mascota $mascotas)
{
    return response()->json($mascotas);
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


        $mascota = Mascota::create([
            'nombre' => $request->input('nombre'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'especie' => $request->input('especie'),
            'raza' => $request->input('raza'),
            'color' => $request->input('color'),
            'peso' => $request->input('peso'),
            'altura' => $request->input('altura'),
            'diagnostico' => $request->input('diagnostico'),
            'tratamiento' => $request->input('tratamiento'),
            'notas_adicionales' => $request->input('notas_adicionales'),
            'id_cliente' => $request->input('id_cliente'),
        ]);

        return response()->json($mascota, 201); // 201 Created
    }

    public function update(Request $request, Mascota $mascota)
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

        $mascota->update([
            'nombre' => $request->input('nombre'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'especie' => $request->input('especie'),
            'raza' => $request->input('raza'),
            'color' => $request->input('color'),
            'peso' => $request->input('peso'),
            'altura' => $request->input('altura'),
            'diagnostico' => $request->input('diagnostico'),
            'tratamiento' => $request->input('tratamiento'),
            'notas_adicionales' => $request->input('notas_adicionales'),
            'id_cliente' => $request->input('id_cliente'),
        ]);

        return response()->json($mascota, 200); // 200 OK
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return response()->json(null, 204); // 204 No Content
    }
}
