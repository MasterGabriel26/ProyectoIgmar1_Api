<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ejemploController extends Controller
{
    public function index(){
        return response()->json([
            "msg"=>"hola mundo..",
            "data"=>[],
            "status"=>200 
        ],  200);
    }
}
