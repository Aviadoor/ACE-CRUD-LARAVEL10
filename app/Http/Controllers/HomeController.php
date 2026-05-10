<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Se usa __invoke cuando el controlador usa una unica ruta
    public function __invoke()
    {
        return view('home');
    }
}
