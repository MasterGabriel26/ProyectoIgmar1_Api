<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ejemploController;
use App\Http\Controllers\rrhh\RecursosHumanosController;
use App\Http\Controllers\rrhh\AutosController;
use App\Http\Controllers\rrhh\CatalogoController;

//Estandar softdelete 
//Route::put('/autos/update/{id}',[AutosController::class, 'update']);

Route::prefix('v1.0')->group(function () {
    Route::post('check', function () { return "ok"; });

    //PERSONAS
    Route::get('personas',[RecursosHumanosController::class, 'index']);
    Route::post('persona/create',[RecursosHumanosController::class, 'create']);
    Route::put('persona/update/{id}', [RecursosHumanosController::class, 'update'])->where('id','[0-9]+');
    Route::delete('persona/delete/{id}', [RecursosHumanosController::class, 'destroy'])->where('id','[0-9]+');
    Route::put('persona/restore/{id}', [RecursosHumanosController::class, 'restore']);

    //AUTOS
    Route::get('/autos',[AutosController::class, 'index']);
    Route::post('/persona/{id}/autos/create',[AutosController::class, 'create']);
    Route::put('/persona/{persona_id}/autos/update/{auto_id}',[AutosController::class, 'update']);
    Route::delete('/autos/delete/{id}',[AutosController::class, 'destroy']);
    Route::put('/autos/restore/{id}',[AutosController::class, 'restore']);

    //CATALOGO
    Route::get('/catalogo',[CatalogoController::class, 'index']);
});

/*

    tabla persona, una persona puede tener muchos autos
    donde el suto cada auto, donde un modelos 
    puede pertenecer a muchos autos
    ->catalogo
    ->utilizar seeders
    ->con migraciones y sus seeders


    -------
    una persona puede tener muchos autos donde el auto, cada auto 
    donde un modelo puede pertenecer a muchos autos 
    para nosostros eso es un catalogo y aqui utilizaremos seeders
    ese catalogo se tiene que llenar con seeders
    y cuando agreguemos a una persona un auto
    necesitamos mandarle el id de la persona, el auto y 
    la llave foranea de los modelos, pero tambien una persona se puede
    desaser de un auto
*/