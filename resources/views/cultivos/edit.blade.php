@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cultivo</h1>

    <form action="{{ route('cultivos.update', $cultivo->id_cultivo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tipo_cultivo" class="form-label">Tipo de Cultivo</label>
            <input type="text" class="form-control" id="tipo_cultivo" name="tipo_cultivo" value="{{ $cultivo->tipo_cultivo }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_siembra" class="form-label">Fecha de Siembra</label>
            <input type="date" class="form-control" id="fecha_siembra" name="fecha_siembra" value="{{ $cultivo->fecha_siembra }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="produccion" {{ $cultivo->estado == 'produccion' ? 'selected' : '' }}>Producción</option>
                <option value="recien sembrado" {{ $cultivo->estado == 'recien sembrado' ? 'selected' : '' }}>Recién Sembrado</option>
                <option value="soqueado" {{ $cultivo->estado == 'soqueado' ? 'selected' : '' }}>Soqueado</option>
                <option value="brocado" {{ $cultivo->estado == 'brocado' ? 'selected' : '' }}>Brocado</option>
                <option value="normal" {{ $cultivo->estado == 'normal' ? 'selected' : '' }}>Normal</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_lote" class="form-label">Lote Asociado</label>
            <select class="form-select" id="id_lote" name="id_lote" required>
                @foreach($lotes as $lote)
                    <option value="{{ $lote->id_lote }}" {{ $cultivo->id_lote == $lote->id_lote ? 'selected' : '' }}>{{ $lote->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('cultivos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
