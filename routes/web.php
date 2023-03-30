<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//frontend
Route::get('/cliente/create',"App\Http\Controllers\clienteController@create");
Route::get('/horario/registro',"App\Http\Controllers\parqueoController@create");

//backend
Route::get('/cliente',"App\Http\Controllers\clienteController@obtenercliente"); //para tener todos los registros y mostrarlos
Route::post('/clientecreado',"App\Http\Controllers\clienteController@store"); //crear un registro
Route::get('/cliente/{id}','App\Http\Controllers\clienteController@show'); //para mostrarlos los registros
Route::put('/cliente/{id}','App\Http\Controllers\clienteController@update'); //actualizar un registro
Route::delete('/cliente/{id}','App\Http\Controllers\clienteController@destroy'); //borrar un registro

Route::get('/parqueo',"App\Http\Controllers\parqueoController@obtenerparqueo"); //para tener todos los registros y mostrarlos
Route::post('/parqueocreado',"App\Http\Controllers\parqueoController@store"); //crear un registro
Route::get('/parqueo/{id}','App\Http\Controllers\parqueoController@show'); //para mostrarlos los registros
Route::put('/parqueo/{id}','App\Http\Controllers\parqueoController@update'); //actualizar un registro
Route::delete('/parqueo/{id}','App\Http\Controllers\parqueoController@destroy'); //borrar un registro