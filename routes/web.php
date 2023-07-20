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

Route::get('/', [App\Http\Controllers\EmpleadoController::class, 'index']);

Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'empleados'])->name('empleados');

Route::post('/empleado', [App\Http\Controllers\EmpleadoController::class, 'saveOrUpdate'])->name('empleado.save');

Route::post('/filter', [App\Http\Controllers\EmpleadoController::class, 'filter'])->name('empleado.filter');

Route::get('/empleado/{id}', [App\Http\Controllers\EmpleadoController::class, 'empleado']);

Route::get('/empleado/delete/{id}', [App\Http\Controllers\EmpleadoController::class, 'delete']);

Route::get('/catalogo', [App\Http\Controllers\CatalogoController::class, 'index']);

Route::get('/municipios/{id}', [App\Http\Controllers\CatalogoController::class, 'municipios']);

Route::get('/generate-data', [App\Http\Controllers\EmpleadoController::class, 'GenerateData']);

