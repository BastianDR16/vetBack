@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Mascotas</h2>

        <a href="{{ route('mascotas.create') }}" class="btn btn-primary mb-2">Registrar Nueva Mascota</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Dueño</th>
                    <!-- Agrega más columnas según tus necesidades -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->id }}</td>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->fecha_nacimiento }}</td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->cliente->nombre }} {{ $mascota->cliente->apellido }}</td>
                        <!-- Agrega más celdas según tus necesidades -->
                        <td>
                            <a href="{{ route('mascotas.show', $mascota->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <!-- Agrega más acciones según tus necesidades -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
