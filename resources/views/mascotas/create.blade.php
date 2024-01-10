<!-- resources/views/mascotas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Registrar Mascota</h2>

        <form action="{{ route('mascotas.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_cliente">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre de la Mascota</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="especie">Especie</label>
                <input type="text" name="especie" id="especie" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="raza">Raza</label>
                <input type="text" name="raza" id="raza" class="form-control">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control">
            </div>
            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" name="peso" id="peso" class="form-control">
            </div>
            <div class="form-group">
                <label for="altura">Altura</label>
                <input type="number" name="altura" id="altura" class="form-control">
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico</label>
                <textarea name="diagnostico" id="diagnostico" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="tratamiento">Tratamiento</label>
                <textarea name="tratamiento" id="tratamiento" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="notas_adicionales">Notas Adicionales</label>
                <textarea name="notas_adicionales" id="notas_adicionales" class="form-control" rows="3"></textarea>
            </div>

       
            <button type="submit" class="btn btn-primary">Registrar Mascota</button>
        </form>
    </div>
@endsection
