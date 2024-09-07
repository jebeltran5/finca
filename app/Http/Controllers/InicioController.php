<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finca;
use App\Models\User;

class InicioController extends Controller
{
    //
    public function inicio()
    {
         $totalUsuarios = User::count();
         $totalFincas = Finca::count();
         $chartData = [


         ];
         $tableHeaders = ['ID','Nombre','Propietario'];
         $tableRows = Finca::select('id_finca', 'nombre', 'propietario')->get()->toArray();
         
         // Depuración
         $tableRows = Finca::select('id_finca', 'nombre', 'propietario')->get();
      

         return view('inicio', compact('totalUsuarios', 'totalFincas','chartData', 'tableHeaders','tableRows'));
        
    }
}

