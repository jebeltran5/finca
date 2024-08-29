@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Lote</h1>
    <form action="{{ route('lotes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dimension">Dimensión</label>
            <input type="text" name="dimension" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_finca">Finca</label>
            <select name="id_finca" class="form-control" required>
                <!-- Aquí llenas las fincas disponibles -->
                @foreach($fincas as $finca)
                    <option value="{{ $finca->id_finca }}">{{ $finca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

