<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CursoController;

use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Nota: La uri pasada por el usuario sera resuelta de arriba a abajo con la primera aparicion.

Route::get('/', HomeController::class);

//Agrupar por Controlador
Route::controller(CursoController::class) -> group(function(){
    
    Route::get('cursos', 'index');

    Route::get('cursos/create/{nombre1?}/{nombre2?}', 'create');

    Route::get('cursos/show', 'show');

    Route::get('cursos/gratis/{curso}', 'gratis');

});

Route::controller(EmpleadoController::class) -> group(function(){

    Route::get('empleado/form', 'form');

    Route::post('empleado/form', 'insertar');

    Route::delete('empleado/form/{id}', 'eliminar') -> name('empleado.eliminar');

    Route::get('empleado/modificar/{id}', 'form_modificar') -> name('empleado.form.modificar');

    Route::put('empleado/modificar/{id}', 'modificar') -> name('empleado.modificar');

});



/*
//Sintaxis: ('uri', [controlador::class, metodo])
Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create/{nombre1?}/{nombre2?}', [CursoController::class, 'create']);

Route::get('cursos/show', [CursoController::class, 'show']);*/


/*
Route::get('cursos', function(){
    return "Bienvenido a cursos";
});

Route::get('cursos/login', function () {
    return "Hola al login";
});

Route::get('cursos/{curso}', function($curso){
    return "Bienvenido al curso de $curso :)";
});

Route::get('cursos/crear/{id}/{name}', function ($id, $name) {
    return "Curso creado. id: $id name: $name";
});

//Indicamos que la variable es opcional {horas?}
//Si la variable no se declara toma el valor =1
Route::get('cursos/categoria/tiempo/{horas?}', function($horas=1){
    return "El curso tiene horas: $horas";
});*/
