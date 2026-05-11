<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function get_login(Request $request)
    {

        return view('user.login');

    }

    public function post_login(Request $request)
    {
        
        $credentials = $request -> validate([
            
            'name' => ['required'],
            
            'password' => ['required']

            ]);

        /*Caso done nombre del input no coincide con la columna de la base de datos
        $request->validate([
        'perroSalvaje' => ['required'],
        'password' => ['required']
        ]);

        // Mapeamos 'name' (columna DB) con 'perroSalvaje' (input Form)
        $credentials = [
            'name'     => $request->input('perroSalvaje'),
            'password' => $request->input('password'),
        ];
        */
            
        if (Auth::attempt($credentials))
        {
            $request -> session() -> regenerate();

            $request -> session() -> put('name', $request -> input('name'));

            return redirect() -> intended('/');

        }

        return redirect('usuario/login');
    }

    public function logout(Request $request)
    {

        $request -> session() -> flush();

        $request -> session() -> regenerate();

        $request -> session() -> invalidate();

        return redirect('/');

    }
}
