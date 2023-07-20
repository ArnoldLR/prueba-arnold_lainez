<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Catalogo;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index(Request $request){
        
        // $jsonData = Storage::disk('public')->get('ElSalvador-Departments-Municipalities-ZipCode.json');
        // $data = json_decode($jsonData, true);

        // foreach($data as $municipio){
        //     $catalogo = new Catalogo();
        //     $catalogo->valor = $municipio['city'];
        //     $catalogo->grupo = $municipio['state'];
        //     $catalogo->id_padre = $municipio['id_depto'];
        //     $catalogo->save();
        // }

        //$empleados = Empleado::where('id', 6)->with('catalogo')->first();

        //return response()->json($empleados);
        return view('home');
    }

    public function empleados(){

        $empleados = Empleado::all();

        return response()->json([
            'status' => 200,
            'data' => $empleados,
        ]);
        
    }
    
    public function saveOrUpdate(Request $request){

        if($request->id){
            $empleado = Empleado::where('id', $request->id)->first();
            $empleado->fill($request->all());
            $empleado->save();
        }else{
            $empleado = new Empleado();
            $empleado->fill($request->all());
            $empleado->save();
        }
        
        return response()->json([
            'status' => 200,
            'data' => $empleado,
        ]);
    }

    public function empleado($id){

        $empleado = Empleado::where('id', $id)->first();
        $municipios = Catalogo::where('id_padre', $empleado->id_depto)->get();

        return response()->json([
            'status' => 200,
            'data' => $empleado,
            'municipios' => $municipios,
        ]);
    }

    public function delete($id){

        $empleado = Empleado::where('id', $id)->first();
        $empleado->delete();
    
        return response()->json([
            'status' => 200,
            'data' => 'Empleado eliminado!',
        ]);
    }

    public function filter(Request $request){

        $empleados = Empleado::when($request->nombre, function($q) use($request){
                    return $q->where('nombre', 'LIKE',"%". $request->nombre ."%");
                })->when($request->apellido, function($q) use($request){
                    return $q->where('apellido', 'LIKE',"%". $request->apellido ."%");
                })->when($request->correo, function($q) use($request){
                    return $q->where('correo', 'LIKE',"%". $request->correo ."%");
                })->when($request->telefono, function($q) use($request){
                    return $q->where('telefono', 'LIKE',"%". $request->telefono ."%");
                })->when($request->direccion, function($q) use($request){
                    return $q->where('direccion', 'LIKE',"%". $request->direccion ."%");
                })->when($request->id_depto, function($q) use($request){
                    return $q->where('id_depto', $request->id_depto);
                })->when($request->id_municipio, function($q) use($request){
                    return $q->where('id_municipio', $request->id_municipio);
                })->get();

        return response()->json([
            'status' => 200,
            'data' => $empleados,
        ]);
        
    }

    //end controller 
}
