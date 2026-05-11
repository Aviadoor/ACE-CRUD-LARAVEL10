<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    protected $UserModel;

    public function __construct()
    {
        $this -> UserModel = new User();
    }

    public function get_register(Request $request)
    {

        return view('user/create');

    }

    public function post_register(Request $request)
    {

        $name = $request -> post('nombre');

        $correo = $request -> post('email');

        $password = $request -> post('password');

        $user = $this -> UserModel;

        if(isset($name, $correo, $password))
        {
            
            $user -> name = $name;

            $user -> email = $correo;

            $user -> password = $password;

            $user -> save();
        
        }

        return redirect('usuario/login');

    }

}
