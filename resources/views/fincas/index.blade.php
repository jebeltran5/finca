@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Fincas</h1>
    <a href="{{ route('fincas.create') }}" class="btn btn-primary">Añadir Finca</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Propietario</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fincas as $finca)
            <tr>
                <td>{{ $finca->nombre }}</td>
                <td>{{ $finca->propietario }}</td>
                <td>{{ $finca->location }}</td>
                <td>
                    <a href="{{ route('fincas.edit', $finca->id_finca) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('fincas.destroy', $finca->id_finca) }}" method="POST" style="display:inline-block;">
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

