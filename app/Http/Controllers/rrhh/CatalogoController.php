<?php

namespace App\Http\Controllers\rrhh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rrhh\Modelo;

class CatalogoController extends Controller
{
    public function index(){
        $catalogo = Modelo::all(); 
        return response()->json([
            "msg" => "Catalogo cargado de manera exitosa",
            "data" => $catalogo,
            "status" => 200
        ], 200);
    }
}
