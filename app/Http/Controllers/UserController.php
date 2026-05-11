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

    public function form_login(Request $request)
    {

        return view('user/login');

    }

    public function login(Request $request)
    {

        $nombre = $request -> usuario;

        $password = $request -> password;

        $usuarios = User::where('name', $nombre)->get();

        foreach ($usuarios as $usuario) {

            if (Hash::check($password, $usuario -> password)) {

                $request -> session() -> put([

                    'user' => $usuario->name,

                    'user_id' => $usuario->id,

                ]);

                return redirect('/');
            }
    }

        return redirect('usuario/login');

    }

    public function register_user(Request $request)
    {

        return view('user/create');

    }

    public function register(Request $request)
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

    public function logout(Request $request)
    {

        $request -> session() -> invalidate();

        return redirect('/');

    }

}
