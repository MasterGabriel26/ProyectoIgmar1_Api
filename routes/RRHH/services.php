<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ejemploController;
use App\Http\Controllers\rrhh\RecursosHumanosController;

Route::prefix('v1.0')->group(function () {
    Route::post('check', function () { return "ok"; });

    //estandar softdelete 
    Route::get('personas',[RecursosHumanosController::class, 'index']);
    Route::post('persona/create',[RecursosHumanosController::class, 'create']);
    Route::put('persona/update/{id}',[RecursosHumanosController::class, 'update']);
    Route::delete('persona/delete/{id}', [RecursosHumanosController::class, 'destroy']);
    Route::put('persona/restore/{id}', [RecursosHumanosController::class, 'restore']);
});