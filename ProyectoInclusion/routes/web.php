<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function(){
	return view('welcome');
});
Route::get('ayudainfo', function(){
	return view("index.ayudainfo");
});

Route::group(['middleware' => ['web']], function () {
    	Route::get('/inicio', function(){	
			return view('index.inicio');
		});

		Route::get('nosotros', function(){
			return view('index.nosotros');
		});

		Route::get('contacto', function(){
			return view('index.contacto');
		});

		Route::get('verPoS', function(){
			return view('index.producto_o_servicio');
		});

		Route::get('sonrisas', function(){
			return view('index.area_sonrisas');
		});
		Route::get('sesion', function(){
			return view('index.login');
		});


});


//Route::get('/', 'clie')
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::group(['middleware' => 'auth'], function () {
    
		Route::get('home', function(){
			return view("loged.loged");
		});

		Route::get('salir', 'cuentaController@salir');
		Route::get('login/facebook/salir', 'cuentaController@salir');
		Route::get('misDatos','clienteController@vista_datos');
		//Route::get('/','clienteController@vista_inicio');

});








