@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Finca</h1>
    <form action="{{ route('fincas.update', $finca->id_finca) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $finca->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="propietario">Propietario</label>
            <input type="text" name="propietario" class="form-control" value="{{ $finca->propietario }}" required>
        </div>
        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" name="location" class="form-control" value="{{ $finca->location }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

