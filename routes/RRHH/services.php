<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ejemploController;

Route::prefix('v1.0')->group(function () {
    Route::post('check', function () {
        return "ok";
    });
    //estandar softdelete
    Route::get(
        'hello',
        [ejemploController::class, 'index']
    );
});