<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Canales de Transmisión
|--------------------------------------------------------------------------
|
| Aquí puedes registrar todos los canales de transmisión de eventos que tu
| aplicación soporta. Los callbacks de autorización de canales dados se
| usan para verificar si un usuario autenticado puede escuchar el canal.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
