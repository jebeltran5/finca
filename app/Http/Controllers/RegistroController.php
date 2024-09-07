<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Dispositivo;

class RegistroController extends Controller
{
    public function index()
    {
        //
        $registros = Registro::all();
        return view('registros.index', compact('registros'));
    }
    public function create()
    {
    // Obtén todos los dispositivos disponibles
    $dispositivos = Dispositivo::all(); 
    return view('registros.create', compact('dispositivos'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //
        $request->validate([
            'temperatura' => 'required|numeric',
            'humedad' => 'required|numeric',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'id_sensor' => 'required|exists:dispositivos,id_sensor',
        ]);

         // Asegurarse de que 'hora' tenga el formato adecuado
    $hora = $request->input('hora');
    if (strlen($hora) < 5) {
        $hora .= ':00'; // Añadir segundos si faltan
    }

    

        try {
           // Crear el registro
           Registro::create([
            'temperatura' => $request->input('temperatura'),
            'humedad' => $request->input('humedad'),
            'fecha' => $request->input('fecha'),
            'hora' => $hora,
            'id_sensor' => $request->input('id_sensor'),
        ]);
      
        return redirect()->route('registros.index');
    } catch (\Exception $e) {
        // Manejo de errores
        \Log::error('Error al crear el registro:', ['error' => $e->getMessage()]);
        return back()->withErrors(['error' => $e->getMessage()]);
    }
    }
    public function show(string $id)
    {
        $registro = Registro::findOrFail($id);
        return view('registros.show', compact('registro'));
    }

    
    public function edit(string $id)
    {
        $registro = Registro::findOrFail($id);
        $dispositivos = Dispositivo::all(); // También cargar dispositivos para la vista de edición si es necesario
        return view('registros.edit', compact('registro', 'dispositivos'));
    }
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'temperatura' => 'required|numeric',
            'humedad' => 'required|numeric',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i:s',
            'id_sensor' => 'required|exists:dispositivos,id_sensor',
        ]);
        
        $registro = Registro::findOrFail($id);
        $hora = $request->input('hora');
        if (strlen($hora) < 5) {
            $hora .= ':00'; // Añadir segundos si faltan
        }
    
        $registro->update([
            'temperatura' => $request->input('temperatura'),
            'humedad' => $request->input('humedad'),
            'fecha' => $request->input('fecha'),
            'hora' => $hora,
            'id_sensor' => $request->input('id_sensor'),
        ]);

        return redirect()->route('registros.index');
    }
    public function destroy(string $id)
    {
        //
        $registro = Registro::findOrFail($id); // Obtén el registro
        $registro->delete();
        return redirect()->route('registros.index');
    }
}
