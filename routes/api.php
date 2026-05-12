<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas API
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas API para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas serán
| asignadas al grupo de middleware "api". ¡Haz algo grandioso!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
