@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Cliente</h2>

        <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $cliente->apellido }}" required>
            </div>

            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico</label>
                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $cliente->correo_electronico }}" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
            </div>

            <!-- Puedes agregar más campos según tus necesidades -->

            <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
        </form>
    </div>
@endsection
