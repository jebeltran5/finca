<?php
namespace App\Http\Controllers;

use App\Models\Finca;
use Illuminate\Http\Request;

class FincaController extends Controller
{
    public function index()
    {
        $fincas = Finca::all();
        return view('fincas.index', compact('fincas'));
    }

    public function create()
    {
        return view('fincas.create');
    }

    public function store(Request $request)
    {
        // Validación y almacenamiento de datos
            $request->validate([
            'nombre' => 'required',
            'location' => 'required',
            'propietario' => 'required',
        ]);


        //crear una nueva finca
        $finca = new Finca($request->all());

        //asignar el user_id del usuario autenticado
        $finca->user_id = auth()->id();

        //guardar la finca en la base de datos
        $finca->save();
        
        return redirect()->route('fincas.index');
    }

    public function show(Finca $finca)
    {
        return view('fincas.show', compact('finca'));
    }

    public function edit(Finca $finca)
    {
        return view('fincas.edit', compact('finca'));
    }

    public function update(Request $request, Finca $finca)
    {
        // Validación y actualización de datos
             $request->validate([
            'nombre' => 'required',
            'location' => 'required',
            'propietario' => 'required',
        ]);

        $finca->update($request->all());
        return redirect()->route('fincas.index');
    }

    public function destroy(Finca $finca)
    {
        $finca->delete();
        return redirect()->route('fincas.index');
    }
}

