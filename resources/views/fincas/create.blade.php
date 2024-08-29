@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Nueva Finca</h1>
    <form action="{{ route('fincas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="propietario">Propietario</label>
            <input type="text" name="propietario" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection

