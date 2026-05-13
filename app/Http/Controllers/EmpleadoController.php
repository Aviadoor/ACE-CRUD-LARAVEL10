<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    protected $modelEmpleado;

    public function __construct()
    {

        $this -> modelEmpleado = new Empleado();

    }    

    public function form()
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

    public function eliminar(Empleado $empleado)
    {

        $empleado -> delete();

        return redirect('empleado/form');

    }

    public function form_modificar(Empleado $empleado)
    {

        //$empleado = Empleado::find($id);

        return view('empleados/modificar', [

            'empleado' => $empleado
        ]);

    }
    public function modificar(Request $request, Empleado $empleado)
    {

        $empleado -> update([
            
            "nombre" => $request -> post('nombre'),

            "correo" => $request -> post('correo'),

            "edad" => $request -> post('edad')
        ]);

        return redirect('empleado/form');
        
    }
}
