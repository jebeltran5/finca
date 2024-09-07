<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerta;
use App\Models\Registro;

class AlertaController extends Controller
{
    
    public function index()
    {
        $alertas = Alerta::all(); // Obtiene todas las alertas
        $registros = Registro::all(); // Obtiene todos los registros
        return view('alertas.index', compact('alertas', 'registros'));; // Pasa los datos a la vista
    }

    
    public function create()
    {
        $registros = Registro::all(); 
        return view('alertas.create', compact('registros')); // Retorna la vista de formulario para crear una alerta
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha_hora' => 'required|date',
            'tipo_alerta' => 'required|string|max:3',
            'valor_registrado' => 'required|string|max:2',
            'descripcion' => 'required|string|max:150',
            'id_registro' => 'required|exists:registros,id_registro',
        ]);

        //Alerta::create($request->all()); // Crea la alerta en la base de datos
        // Utiliza el modelo correcto
       \App\Models\Alerta::create($validatedData);
        return redirect()->route('alertas.index') // Redirige a la lista de alertas
             ->with('success', 'Alerta creada exitosamente.');
    }

    
    public function show(string $id)
    {
        $alerta = Alerta::findOrFail($id);
        return view('alertas.show', compact('alerta')); // Pasa los datos a la vista
    }

    
    public function edit(string $id)
    {   
        $alerta = Alerta::findOrFail($id); // Encuentra la alerta por ID
        $registros = Registro::all(); // Obtiene todos los registros
        return view('alertas.edit', compact('alerta', 'registros')); // Pasa los datos a la vista
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha_hora' => 'required|date',
            'tipo_alerta' => 'required|string|max:3',
            'valor_registrado' => 'required|string|max:2',
            'descripcion' => 'required|string|max:150',
            'id_registro' => 'required|exists:registros,id_registro',
        ]);
        
        $alerta = Alerta::findOrFail($id); // Encuentra la alerta por ID
        $alerta->update($request->all()); // Actualiza la alerta en la base de datos

        return redirect()->route('alertas.index') // Redirige a la lista de alertas
             ->with('success', 'Alerta actualizada exitosamente.');
    }

    
    public function destroy(string $id)
    {   
        // Recupera la instancia de Alerta por su id
        $alerta = Alerta::findOrFail($id);
        $alerta->delete(); // Elimina la alerta de la base de datos

        return redirect()->route('alertas.index') // Redirige a la lista de alertas
             ->with('success', 'Alerta eliminada exitosamente.');
    }
}
