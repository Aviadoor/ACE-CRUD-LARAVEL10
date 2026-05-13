<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');


Route::name('user.') -> group(function(){

    Route::prefix('usuario') -> group(function(){

        Route::controller(LoginController::class) -> group(function(){
            
            Route::get('/login', 'get_login') -> name('get_login');
        
            Route::post('/login', 'post_login') -> name('post_login');
        
            Route::get('/logout', 'logout') -> name('logout');
        });

        Route::controller(UserController::class) -> group(function(){
            
            Route::get('/register', 'get_register') -> name('get_register');
        
            Route::post('/register', 'post_register') -> name('post_register');
        
        });

    });

});



Route::middleware(['auth']) -> group(function(){

    Route::controller(EmpleadoController::class) -> group(function(){

        Route::name('empleado.') -> group(function(){

            Route::prefix('empleado') -> group(function(){
    
                Route::get('/form', 'form') -> name('form');
    
                Route::post('/form', 'insertar');
        
                Route::delete('/form/{empleado}', 'eliminar') -> name('eliminar');
        
                Route::get('/modificar/{empleado}', 'form_modificar') -> name('form.modificar');
        
                Route::put('/modificar/{empleado}', 'modificar') -> name('modificar');
    
            });
            
        });
    
    });

});

Route::get('regex/{nombrecompleto}', function(string $name){
    return "Bienvenido $name";
}) -> where('nombrecompleto', '.*(Diego)$');

Route::fallback(function () {

    return redirect('/');

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
