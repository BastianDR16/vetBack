<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteApiController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:clientes',
            'telefono' => 'required',
            'password' => 'required',
        ]);

        $cliente = Cliente::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo_electronico' => $request->input('correo_electronico'),
            'telefono' => $request->input('telefono'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json($cliente, 201); // 201 Created
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:clientes,correo_electronico,' . $cliente->id,
            'telefono' => 'required',
            'password' => 'required',
        ]);

        $cliente->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo_electronico' => $request->input('correo_electronico'),
            'telefono' => $request->input('telefono'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json($cliente, 200); // 200 OK
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(null, 204); // 204 No Content
    }
}
