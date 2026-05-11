<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class EmpleadoController extends Controller
{
    protected $modelEmpleado;

    public function __construct()
    {

        $this -> modelEmpleado = new Empleado();

    }    

    public function form(Request $request)
    {

        $empleados = Empleado::get();

        return view('empleados/form', [

            'empleados' => $empleados

        ]);

    }

    public function insertar(Request $request)
    {

        $nombre = $request -> post('nombre');

        $correo = $request -> post('correo');

        $edad = $request -> post('edad');

        $empleado = $this -> modelEmpleado;

        if(isset($nombre, $correo, $edad))
        {

            $empleado -> nombre = $nombre;

            $empleado -> correo = $correo;

            $empleado -> edad = $edad;

            $empleado -> save();
        
        }

        return redirect('empleado/form');

    }

    public function eliminar($id)
    {

        Empleado::destroy($id);

        return redirect('empleado/form');

    }

    public function form_modificar($id)
    {

        $empleado = Empleado::find($id);

        return view('empleados/modificar', [

            'empleado' => $empleado
        ]);

    }
    public function modificar(Request $request, $id)
    {

        $empleado = Empleado::find($id);

        $nombre = $request -> post('nombre');
        
        $correo = $request -> post('correo');
        
        $edad = $request -> post('edad');

        $empleado -> update([
            
            "nombre" => $nombre,

            "correo" => $correo,

            "edad" => $edad
        ]);

        return redirect('empleado/form');
        
    }
}
