<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Valores predeterminados de autenticación
    |--------------------------------------------------------------------------
    |
    | Esta opción controla el "guard" predeterminado de autenticación y las
    | opciones para restablecer contraseñas en tu aplicación. Puedes cambiar
    | estos valores según sea necesario, pero son un buen punto de partida.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de autenticación
    |--------------------------------------------------------------------------
    |
    | A continuación puedes definir cada guard de autenticación para tu
    | aplicación. Se ha definido una excelente configuración predeterminada
    | que usa almacenamiento de sesión y el proveedor Eloquent.
    |
    | Todos los drivers de autenticación tienen un proveedor de usuarios. Esto
    | define cómo se obtienen los usuarios de tu base de datos u otro sistema
    | de almacenamiento que use esta aplicación para persistir los datos.
    |
    | Soportado: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de usuarios
    |--------------------------------------------------------------------------
    |
    | Todos los drivers de autenticación tienen un proveedor de usuarios. Esto
    | define cómo se obtienen los usuarios de tu base de datos u otro sistema
    | de almacenamiento que use esta aplicación para persistir los datos.
    |
    | Si tienes varias tablas o modelos de usuarios, puedes configurar varias
    | fuentes que representen cada modelo/tabla. Estas fuentes pueden luego
    | asignarse a cualquier guard de autenticación adicional que definas.
    |
    | Soportado: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Restablecimiento de contraseñas
    |--------------------------------------------------------------------------
    |
    | Puedes especificar varias configuraciones de restablecimiento de
    | contraseñas si tienes más de una tabla o modelo de usuario en la
    | aplicación y deseas ajustes separados según el tipo de usuario.
    |
    | El tiempo de expiración es la cantidad de minutos durante los cuales
    | cada token de restablecimiento se considera válido. Esta característica
    | de seguridad mantiene los tokens de corta duración para que se puedan
    | adivinar con menos facilidad. Puedes cambiarlo según sea necesario.
    |
    | El ajuste de throttle es la cantidad de segundos que un usuario debe
    | esperar antes de generar más tokens de restablecimiento de contraseña.
    | Esto evita que el usuario genere una gran cantidad de tokens rápidamente.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tiempo de expiración de confirmación de contraseña
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir la cantidad de segundos antes de que la
    | confirmación de contraseña expire y se le solicite al usuario que
    | vuelva a ingresar su contraseña en la pantalla de confirmación.
    | Por defecto, el tiempo de espera es de tres horas.
    |
    */

    'password_timeout' => 10800,

];
