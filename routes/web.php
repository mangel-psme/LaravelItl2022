<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductosController;

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

Route::get('holaMundo', function(){    echo 'Hola mundo';   });
// http://127.0.0.1:8000/holaMundo

Route::get('holaController', [DemoController::class, 'holaMundo']);
// http://127.0.0.1:8000/holaController

Route::get('vista1', [DemoController::class, 'vista1']);
// http://127.0.0.1:8000/vista1


Route::get('listaP', [ProductosController::class, 'lista']);
// http://127.0.0.1:8000/listaP

Route::get('formularioP', [ProductosController::class, 'formulario']);
// http://127.0.0.1:8000/formularioP

Route::post('registrarP', [ProductosController::class, 'registrar']);

Route::get('cargarP/{id}', [ProductosController::class, 'cargar']);

Route::post('editarP', [ProductosController::class, 'editar']);

Route::get('eliminarP/{id}', [ProductosController::class, 'eliminar']);
