<!-- resources/views/clientes/index.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de layouts -->

@section('content')
    <div class="container">
        <h2>Lista de Clientes</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Crear Cliente</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->correo_electronico }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No hay clientes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
