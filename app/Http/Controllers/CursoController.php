<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CursoController extends Controller
{
    public function index(){
        return view('cursos/index');
    }

    public function create($nombreCurso='Ninguno', $nombreCurso2='Sin datos'){
        return view('cursos/create', [
            'nombreCurso' => $nombreCurso, 
            'nombreCurso2' => $nombreCurso2
            ]);
    }

    public function show(){
        return view('cursos/show');
    }

    public function gratis($curso){
        return view('cursos/gratis', [
            'curso' => $curso
        ]);
    }
}
