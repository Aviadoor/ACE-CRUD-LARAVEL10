<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CursoController;

use App\Http\Controllers\EmpleadoController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas serán
| asignadas al grupo de middleware "web". ¡Haz algo grandioso!
|
*/

//Nota: La uri pasada por el usuario sera resuelta de arriba a abajo con la primera aparicion.

Route::get('/', HomeController::class);


Route::controller(LoginController::class) -> group(function(){
    
    Route::get('usuario/login', 'get_login') -> name('user.get_login');

    Route::post('usuario/login', 'post_login') -> name('user.post_login');

    Route::get('usuario/logout', 'logout') -> name('user.logout');
});


Route::controller(UserController::class) -> group(function(){
    
    Route::get('usuario/register', 'get_register') -> name('user.get_register');

    Route::post('usuario/register', 'post_register') -> name('user.post_register');

});

Route::middleware(['auth']) -> group(function(){

    Route::controller(EmpleadoController::class) -> group(function(){
    
        Route::get('empleado/form', 'form') -> name('empleado.form');
    
        Route::post('empleado/form', 'insertar');
    
        Route::delete('empleado/form/{id}', 'eliminar') -> name('empleado.eliminar');
    
        Route::get('empleado/modificar/{id}', 'form_modificar') -> name('empleado.form.modificar');
    
        Route::put('empleado/modificar/{id}', 'modificar') -> name('empleado.modificar');
    
    });

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
