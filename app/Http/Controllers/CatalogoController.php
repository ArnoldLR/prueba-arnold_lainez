<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class CatalogoController extends Controller
{
    
    public function index(){

        return response()->json([
            'status' => 200,
            'data' => ['departamentos' => Catalogo::where('grupo', 'DEPARTAMENTO')->get(),
                        'municipios' => Catalogo::where('grupo', 'MUNICIPIO')->get(),
            ]
        ]);
    }

    public function municipios($id){

        $municipios = Catalogo::where('id_padre', $id)->get();

        return response()->json([
            'status' => 200,
            'data' => $municipios,
        ]);
    }
}
