@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Cultivos</h1>

    <!-- Botón para añadir nuevo cultivo -->
    <a href="{{ route('cultivos.create') }}" class="btn btn-primary mb-3">Añadir Cultivo</a>

    <!-- Tabla de cultivos -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Cultivo</th>
                <th>Fecha de Siembra</th>
                <th>Estado</th>
                <th>Lote Asociado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cultivos as $cultivo)
            <tr>
                <td>{{ $cultivo->id_cultivo }}</td>
                <td>{{ $cultivo->tipo_cultivo }}</td>
                <td>{{ $cultivo->fecha_siembra }}</td>
                <td>{{ $cultivo->estado }}</td>
                <td>{{ $cultivo->lote->nombre }}</td>
                <td>
                    <!-- Botón para editar cultivo -->
                    <a href="{{ route('cultivos.edit', $cultivo->id_cultivo) }}" class="btn btn-warning btn-sm">Editar</a>
                    
                    <!-- Formulario para eliminar cultivo -->
                    <form action="{{ route('cultivos.destroy', $cultivo->id_cultivo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
