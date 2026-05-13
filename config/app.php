<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre de la Aplicación
    |--------------------------------------------------------------------------
    |
    | Este valor es el nombre de tu aplicación. Este valor se usa cuando el
    | framework necesita colocar el nombre de la aplicación en una notificación o
    | en cualquier otra ubicación requerida por la aplicación o sus paquetes.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Entorno de la Aplicación
    |--------------------------------------------------------------------------
    |
    | Este valor determina el "entorno" en el que se ejecuta actualmente tu
    | aplicación. Esto puede determinar cómo prefieres configurar varios
    | servicios que utiliza la aplicación. Configura esto en tu archivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de Depuración de la Aplicación
    |--------------------------------------------------------------------------
    |
    | Cuando tu aplicación está en modo de depuración, se mostrarán mensajes de error
    | detallados con trazas de pila en cada error que ocurra dentro de tu
    | aplicación. Si está deshabilitado, se muestra una página de error genérica simple.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de la Aplicación
    |--------------------------------------------------------------------------
    |
    | La consola usa esta URL para generar URL correctamente cuando se usa
    | la herramienta de línea de comandos Artisan. Debes establecer esto en la raíz de
    | tu aplicación para que se use al ejecutar tareas de Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Zona Horaria de la Aplicación
    |--------------------------------------------------------------------------
    |
    | Aquí puedes especificar la zona horaria predeterminada para tu aplicación, que
    | será utilizada por las funciones de fecha y hora de PHP. Hemos
    | establecido esto en un valor predeterminado sensato para ti desde el principio.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Configuración Regional de la Aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional de la aplicación determina la configuración regional predeterminada que será utilizada
    | por el proveedor del servicio de traducción. Eres libre de establecer este valor
    | en cualquiera de las configuraciones regionales que serán compatibles con la aplicación.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Configuración Regional de Respaldo de la Aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional de respaldo determina la configuración regional a usar cuando la actual
    | no está disponible. Puedes cambiar el valor para que corresponda a cualquiera de
    | las carpetas de idiomas que se proporcionan a través de tu aplicación.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Configuración Regional de Faker
    |--------------------------------------------------------------------------
    |
    | Esta configuración regional será utilizada por la biblioteca Faker PHP al generar datos
    | falsos para los seeders de tu base de datos. Por ejemplo, se usará para obtener
    | números de teléfono localizados, información de direcciones y más.
    |
    */

    'faker_locale' => 'es_PE',

    /*
    |--------------------------------------------------------------------------
    | Clave de Encriptación
    |--------------------------------------------------------------------------
    |
    | Esta clave es utilizada por el servicio de encriptación de Illuminate y debe establecerse
    | en una cadena aleatoria de 32 caracteres, de lo contrario estas cadenas encriptadas
    | no serán seguras. ¡Por favor, haz esto antes de implementar una aplicación!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Driver del Modo de Mantenimiento
    |--------------------------------------------------------------------------
    |
    | Estas opciones de configuración determinan el driver utilizado para determinar y
    | administrar el estado del "modo de mantenimiento" de Laravel. El driver "cache"
    | permitirá controlar el modo de mantenimiento en múltiples máquinas.
    |
    | Drivers soportados: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de Servicios Autocargados
    |--------------------------------------------------------------------------
    |
    | Los proveedores de servicios listados aquí se cargarán automáticamente en la
    | solicitud a tu aplicación. Siéntete libre de agregar tus propios servicios a
    | esta matriz para otorgar funcionalidad expandida a tus aplicaciones.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Proveedores de Servicios de Paquetes...
         */

        /*
         * Proveedores de Servicios de la Aplicación...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Alias de Clases
    |--------------------------------------------------------------------------
    |
    | Esta matriz de alias de clases se registrará cuando se inicie esta aplicación.
    | Sin embargo, siéntete libre de registrar tantos como desees ya que
    | los alias se cargan "de forma diferida" para no obstaculizar el rendimiento.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
