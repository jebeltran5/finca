<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Lote;
use App\Models\Finca;

class LoteController extends Controller
{
    
    public function index()
    {
        //
       $lotes = Lote::all();
       return view('lotes.index', compact('lotes'));
    
    }

    
    public function create()
    {
        //
        $fincas = Finca::all();
        return view('lotes.create', compact('fincas'));
    }

    
    public function store(Request $request)
    {
        //validacion y almacenamiento de bases de datos
        $request->validate([
          'nombre'=>'required',
          'dimension'=>'required',
          'id_finca'=>'required',

        ]);
         // Crear el nuevo lote
         Lote::create([
            'nombre' => $request->nombre,
            'dimension' => $request->dimension,
            'id_finca' => $request->id_finca,
        ]);

        // Redirigir a la página index con un mensaje de éxito
        return redirect()->route('lotes.index')->with('success', 'Lote creado exitosamente.');
    }


    public function show(Lote $lote)
    {
        //
        //return view('lotes.show', compact('lote'));

    }

    
    public function edit(Lote $lote)
    {
        //
        $fincas = Finca::all();
        return view('lotes.edit', compact('lote', 'fincas'));
    }

   
    public function update(Request $request, Lote $lote)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'dimension' => 'required',
            'id_finca' => 'required',
        ]);
        $lote->update($request->all());
        return redirect()->route('lotes.index');
    }

    
    public function destroy(Lote $lote)
    {
        //
        $lote->delete();
        return redirect()->route('lotes.index');
    }
}

