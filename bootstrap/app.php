<?php

/*
|--------------------------------------------------------------------------
| Crear La Aplicación
|--------------------------------------------------------------------------
|
| Lo primero que haremos es crear una nueva instancia de la aplicación Laravel
| que sirve como el "pegamento" para todos los componentes de Laravel, y es
| el contenedor de IoC para el sistema vinculando todas las diversas partes.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Vincular Interfaces Importantes
|--------------------------------------------------------------------------
|
| A continuación, necesitamos vincular algunas interfaces importantes en el contenedor para
| que podamos resolverlas cuando sea necesario. Los kernels atienden las
| solicitudes entrantes a esta aplicación tanto desde la web como desde la CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Devolver La Aplicación
|--------------------------------------------------------------------------
|
| Este script devuelve la instancia de la aplicación. La instancia se entrega al
| script que la llama para que podamos separar la construcción de las instancias
| de la ejecución real de la aplicación y el envío de respuestas.
|
*/

return $app;
