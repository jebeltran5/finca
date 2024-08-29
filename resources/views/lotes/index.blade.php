@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Lotes</h1>
    <a href="{{ route('lotes.create') }}" class="btn btn-primary">Añadir Lote</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dimensión</th>
                <th>Finca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach($lotes as $lote)
            <tr>
                <td>{{ $lote->nombre }}</td>
                <td>{{ $lote->dimension }}</td>
                <td>
                    @if($lote->finca)
                        {{ $lote->finca->nombre }}
                    @else
                        Sin finca asignada
                    @endif
                </td>
                <td>
                    <a href="{{ route('lotes.edit', $lote->id_lote) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('lotes.destroy', $lote->id_lote) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
