@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Lote</h1>
    <form action="{{ route('lotes.update', $lote->id_lote) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $lote->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="dimension">Dimensión</label>
            <input type="text" name="dimension" class="form-control" value="{{ $lote->dimension }}" required>
        </div>
        <div class="form-group">
            <label for="id_finca">Finca</label>
            <select name="id_finca" class="form-control" required>
                <!-- Aquí llenas las fincas disponibles -->
                @foreach($fincas as $finca)
                    <option value="{{ $finca->id_finca }}" {{ $finca->id_finca == $lote->id_finca ? 'selected' : '' }}>
                        {{ $finca->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

