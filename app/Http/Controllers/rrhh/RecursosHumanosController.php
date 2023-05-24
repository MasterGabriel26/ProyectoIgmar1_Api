<?php

namespace App\Http\Controllers\rrhh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rrhh\persona;
use App\Models\rrhh\Auto;
use Illuminate\Support\Facades\Validator;

class RecursosHumanosController extends Controller
{
    public function index(){
        $personas = persona::all();
        return response()->json([
            "msg" => "Personas cargadas de manera exitosa",
            "data" => $personas,
            "status" => 200
        ], 200);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:60',
            'ap_paterno' => 'required|max:60',
            'ap_materno' => 'required|max:60',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "msg" => "Error en las validaciones",
                "data" => $validator->errors(),
                "status" => 406
            ], 406);
        }
 
        $persona = new persona();
        $persona->nombre = $request->nombre;
        $persona->ap_paterno = $request->ap_paterno;
        $persona->ap_materno = $request->ap_materno;
        if ($persona->save())
            return response()->json([
                "msg" => "Personas agregada satisfactoriamente",
                "data" => $persona,
                "status" => 201
            ], 201);
        return response()->json([
            "msg" => "Ocurrio un error al crear la persona",
            "data" => $persona,
            "status" => 500
        ], 500);
    }
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:60',
            'ap_paterno' => 'required|max:60',
            'ap_materno' => 'required|max:60',
        ]);
        if ($validator->fails()) 
            return response()->json([
                "msg" => "Error en las validaciones",
                "data" => $validator->errors(),
                "status" => 406
            ], 406);

        $persona = persona::find($id);
        if(!$persona)
                return response()->json([
                "msg" => "La persona no existe",
                "data" => $id,
                "status" => 404
            ], 404);

        $persona->nombre = $request->nombre;
        $persona->ap_paterno = $request->ap_paterno;
        $persona->ap_materno = $request->ap_materno;
        $persona->save();
            return response()->json([
                "msg" => "Persona actualizada satisfactoriamente",
                "data" => $persona,
                "status" => 201
            ], 201);
            
        // if ($persona) {
        //     $persona->nombre = $request->nombre;
        //     $persona->ap_paterno = $request->ap_paterno;
        //     $persona->ap_materno = $request->ap_materno;

        //     if ($persona->save()) {
        //         return response()->json([
        //             "msg" => "Persona actualizada satisfactoriamente",
        //             "data" => $persona,
        //             "status" => 201
        //         ], 201);
        //     } else {
        //         return response()->json([
        //             "msg" => "Ocurrió un error al actualizar la persona",
        //             "data" => $persona,
        //             "status" => 500
        //         ], 500);
        //     } 
        // } else {
        //     return response()->json([
        //         "msg" => "Persona no encontrada",
        //         "status" => 404
        //     ], 404);
        // }
    }

    public function destroy($id){
        $persona = persona::find($id);
        if (!$persona)  
            return response()->json([
                "msg" => "la persona no existe",
                "status" => $id
            ], 201);
        $persona->delete();
        return response()->json([
            "msg" => "Persona removida",
            "status" => $persona
        ], 201);
    }

    public function restore($id){
        $persona = persona::withTrashed()->find($id);
        if ($persona) {
            $persona->restore();
            return response()->json([
                "msg" => "Persona restaurada satisfactoriamente",
                "status" => 201
            ], 201);
        } else {
            return response()->json([
                "msg" => "Persona no encontrada",
                "status" => 404
            ], 404);
        }
    }
}
