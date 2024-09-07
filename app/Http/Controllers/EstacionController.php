<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estacion;
use App\Models\Cultivo;

class EstacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estaciones = Estacion::all();
        return view('estaciones.index', compact('estaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cultivos = Cultivo::all(); // Obtenemos todos los cultivos
        return view('estaciones.create', compact('cultivos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_estacion' => 'required|string|max:255',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'fecha_instalacion' => 'required|date',
            'id_cultivo' => 'required|exists:cultivos,id_cultivo',
        ]);

        Estacion::create($request->all());
        return redirect()->route('estaciones.index')->with('success', 'Estación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('estaciones.show', compact('estacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
       // Buscar el registro de la estación por su ID
    $estacion = Estacion::findOrFail($id);
    $cultivos = Cultivo::all();
    // Pasar el objeto $estacion a la vista
    return view('estaciones.edit', compact('estacion', 'cultivos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre_estacion' => 'required|max:40',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'fecha_instalacion' => 'required|date',
            'id_cultivo' => 'required|exists:cultivos,id_cultivo',
        ]);
         // Encontrar la estación a actualizar usando la columna primaria correcta
        $estacion = Estacion::where('id_estacion', $id)->firstOrFail();

        $estacion->update($request->all());

        return redirect()->route('estaciones.index')->with('success', 'Estación actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Encuentra la estación por su ID
        $estacion = Estacion::findOrFail($id);
        //
        $estacion->delete();

        return redirect()->route('estaciones.index')->with('success', 'Estación eliminada con éxito.');
    }
}
