<?php

namespace App\Http\Controllers\rrhh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rrhh\Auto;
use App\Models\rrhh\Modelo;
use App\Models\rrhh\persona;
use Illuminate\Support\Facades\Validator;

class AutosController extends Controller
{
    public function index(){
        $autos = Auto::all();
        return response()->json([
            "msg" => "Los Autos fueron cargados de manera exitosa",
            "data" => $autos,
            "status" => 200
        ], 200);
    }
    public function create(Request $request, $persona_id){
        $validator = Validator::make($request->all(), [
            'marca' => 'required|max:60',
            'modelo' => 'required|max:60',
            'color' => 'required|max:60'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "msg" => "Error en las validaciones",
                "data" => $validator->errors(),
                "status" => 406
            ], 406);
        }

        $auto = new Auto();
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->color = $request->color;
        $auto->persona_id = $persona_id;

        $modelo = Modelo::where('nombre_modelo', $request->modelo)->first();
        if ($modelo){
            $auto->modelo_id = $modelo->id;
            $auto->modelo = $modelo->nombre_modelo;
            $auto->year = $modelo->year;
            $auto->descripcion = $modelo->descripcion;
        }
        if ($auto->save())
            return response()->json([
                "msg" => "Auto agregado satisfactoriamente",
                "data" => $auto,
                "status" => 201
            ], 201);
        return response()->json([
            "msg" => "Ocurrio un error al crear la Auto",
            "data" => $auto,
            "status" => 500
        ], 500);
    }

    public function update(Request $request, $persona_id, $auto_id){
        $validator = Validator::make($request->all(), [
            'marca' => 'required|max:60',
            'modelo' => 'required',
            'color' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "msg" => "Error en las validaciones",
                "data" => $validator->errors(), 
                "status" => 406
            ], 406);
        }
        $auto = Auto::find($auto_id);
        if (!$auto)
            return response()->json([
                "msg" => "El auto no existe no existe",
                "data" => $auto_id,
                "status" => 404
            ], 404);

        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->color = $request->color;
        $auto->persona_id = $persona_id;
        $modelo = Modelo::where('nombre_modelo', $request->modelo)->first();
        if (!$modelo) 
            return response()->json([
                "msg" => "El auto no existe",
                "data" => $auto_id,
                "status" => 404
            ], 404);
        $auto->modelo_id = $modelo->id;
        $auto->year = $modelo->year;
        $auto->descripcion = $modelo->descripcion;
        $auto->save();
        return response()->json([
            "msg" => "Auto actualizado satisfactoriamente",
            "data" => $auto,
            "status" => 201
        ], 201);
    }

    public function destroy($auto_id){
        $auto = Auto::find($auto_id);
        if (!$auto)  
            return response()->json([
                "msg" => "El auto no existe",
                "status" => $auto_id
            ], 201);
        $auto->delete();
        return response()->json([
            "msg" => "Auto removido",
            "status" => $auto
        ], 201);
    }

    public function restore($auto_id){
        $auto = Auto::withTrashed()->find($auto_id);
        if (!$auto) 
            return response()->json([
                "msg" => "Auto no encontrado",
                "status" => 404
            ], 404);
        $auto->restore();
        return response()->json([
            "msg" => "Auto restaurado satisfactoriamente",
            "status" => 201
        ], 201); 
    }
}
