<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;
use App\Models\Estacion;

class DispositivoController extends Controller
{
    
    public function index()
    {
        
        // Obtener todos los dispositivos
        $dispositivos = Dispositivo::all();
        return view('dispositivos.index', compact('dispositivos'));
    }

    
    public function create()
    {
        $estaciones = Estacion::all(); // Obtener todas las estaciones disponibles
        return view('dispositivos.create', compact('estaciones'));
    }

 
    public function store(Request $request)
    {
       
        
         // Validar y guardar el nuevo dispositivo
         $request->validate([
            'tipo_sensor' => 'required|max:2',
            'estado' => 'required|max:2',
            'id_estacion' => 'required|exists:estaciones,id_estacion',
        ]);

        // Guardar el dispositivo
        $dispositivo = Dispositivo::create($request->all());
        
        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo creado correctamente.');
    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        // Buscar el dispositivo por su ID
        $dispositivo = Dispositivo::findOrFail($id); 
        // Obtener todas las estaciones
        $estaciones = Estacion::all();
        return view('dispositivos.edit', compact('dispositivo', 'estaciones'));
    }

   
    public function update(Request $request, string $id)
    {
        $dispositivo = Dispositivo::findOrFail($id); // Buscar el dispositivo por su ID
        
          // Validar y actualizar el dispositivo
          $request->validate([
            'tipo_sensor' => 'required|max:2',
            'estado' => 'required|max:2',
            'id_estacion' => 'required|exists:estaciones,id_estacion',
        ]);

        $dispositivo->update($request->all());

        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo actualizado correctamente.');
    }

   
    public function destroy(string $id)
    {
        $dispositivo = Dispositivo::findOrFail($id); // Buscar el dispositivo por su ID
        // Eliminar el dispositivo
        $dispositivo->delete();

        return redirect()->route('dispositivos.index')->with('success', 'Dispositivo eliminado correctamente.');
    }
}
