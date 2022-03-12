<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Gustavo',
                           'mostrar' => true,
                            'avisos' =>[ ['id' => 1, 'aviso' => ' is simply dummy text of the printing and typesetting'],
                                        ['id' => 2, 'aviso' => ' iTESTE'],
                                        ['id' => 3, 'aviso' => ' TERCEIRO AVISO']]]);
});


Route::get('/loja', function (){
    return view('/exercicioPI/loja', ['fotos'=> ['cachorro.PNG', 'bola.PNG', 'tenis.PNG'],
                                      'mostrar' => false]);
});


