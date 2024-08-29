@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Nuevo Cultivo</h1>

    <form action="{{ route('cultivos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tipo_cultivo" class="form-label">Tipo de Cultivo</label>
            <input type="text" class="form-control" id="tipo_cultivo" name="tipo_cultivo" required>
        </div>

        <div class="mb-3">
            <label for="fecha_siembra" class="form-label">Fecha de Siembra</label>
            <input type="date" class="form-control" id="fecha_siembra" name="fecha_siembra" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="produccion">Producción</option>
                <option value="recien sembrado">Recién Sembrado</option>
                <option value="soqueado">Soqueado</option>
                <option value="brocado">Brocado</option>
                <option value="normal">Normal</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_lote" class="form-label">Lote Asociado</label>
            <select class="form-select" id="id_lote" name="id_lote" required>
                @foreach($lotes as $lote)
                    <option value="{{ $lote->id_lote }}">{{ $lote->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('cultivos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
