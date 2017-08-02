<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class cuentaController extends Controller
{
    public function salir()
    {
        //Desconctamos al usuario
        Auth::logout();
        //Redireccionamos al inicio de la app con un mensaje
        return Redirect('/')->with('msg', 'Gracias por visitarnos!.');
    }
    
}
