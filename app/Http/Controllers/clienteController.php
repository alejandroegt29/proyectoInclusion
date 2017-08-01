<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function vista_datos(){
    	return view('loged.datosPersonales');
    }
}
