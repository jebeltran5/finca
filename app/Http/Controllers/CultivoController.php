<?php

namespace App\Http\Controllers;

use App\models\Cultivo;
use Illuminate\Http\Request;
use App\models\Lote;

class CultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pantalla index
        $cultivos = Cultivo::with('lote')->get();
        return view('cultivos.index', compact('cultivos'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $lotes = Lote::all();
        return view('cultivos.create', compact('lotes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tipo_cultivo' => 'required|string',
            'fecha_siembra' => 'required|date',
            'estado' => 'required|in:produccion,recien sembrado,soqueado,brocado,normal',
            'id_lote' => 'required|exists:lotes,id_lote',
        ]);

        Cultivo::create($request->all());

        return redirect()->route('cultivos.index')->with('success', 'Cultivo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cultivo $cultivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cultivo $cultivo)
    {
        //
        $lotes = Lote::all();
        return view('cultivos.edit', compact('cultivo', 'lotes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cultivo $cultivo)
    {
        //
        $request->validate([
            'tipo_cultivo' => 'required|string',
            'fecha_siembra' => 'required|date',
            'estado' => 'required|in:produccion,recien sembrado,soqueado,brocado,normal',
            'id_lote' => 'required|exists:lotes,id_lote',
        ]);

        $cultivo->update($request->all());

        return redirect()->route('cultivos.index')->with('success', 'Cultivo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cultivo $cultivo)
    {
        //
        $cultivo->delete();

        return redirect()->route('cultivos.index')->with('success', 'Cultivo eliminado exitosamente.');
    }
}
