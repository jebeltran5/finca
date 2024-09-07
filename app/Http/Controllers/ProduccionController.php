<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cultivo;
use App\Models\Produccion;

class ProduccionController extends Controller
{
    // Muestra la lista de producciones
    public function index()
    {
        $producciones = Produccion::paginate(10);
        return view('producciones.index', compact('producciones'));
    }

    // Muestra el formulario para crear una nueva producción
    public function create()
    {
        $cultivos = Cultivo::all();
        return view('producciones.create', compact('cultivos'));
    }

    // Guarda una nueva producción en la base de datos
    public function store(Request $request, Produccion $produccion)
    {
        $request->validate([
            'fecha_cosecha' => 'required|date',
            'cantidad' => 'required|numeric',
            'estado' => 'required|in:brocado,buen estado',
            'id_cultivo' => 'required|exists:cultivos,id_cultivo',
        ]);

        Produccion::create($request->all());
        return redirect()->route('producciones.index')->with('success', 'Producción creada con éxito.');
    }

    // Muestra los detalles de una producción específica
    public function show(Produccion $produccion)
    {
        return view('producciones.show', compact('produccion'));
    }

    // Muestra el formulario para editar una producción específica
    public function edit($id)
    {
        $produccion = Produccion::findOrFail($id);
        $cultivos = Cultivo::all(); // Obtén todos los cultivos disponibles
        return view('producciones.edit', compact('produccion', 'cultivos'));
    }

    // Actualiza una producción específica en la base de datos
    public function update(Request $request, $id)
    {
        $produccion = Produccion::findOrFail($id);

        $request->validate([
            'fecha_cosecha' => 'required|date',
            'cantidad' => 'required|numeric',
            'estado' => 'required|in:brocado,buen estado',
            'id_cultivo' => 'required|exists:cultivos,id_cultivo',
        ]);

        $produccion->update($request->all());
        return redirect()->route('producciones.index')->with('success', 'Producción actualizada con éxito.');
    }

    // Elimina una producción específica de la base de datos
    public function destroy($id)
    {
        $produccion = Produccion::findOrFail($id);
        $produccion->delete();
        return redirect()->route('producciones.index')->with('success', 'Producción eliminada con éxito.');
    }
}

