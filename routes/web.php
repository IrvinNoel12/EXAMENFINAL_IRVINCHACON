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

// REGISTRAR PRODUCTO
Route::get('registraproducto', 'App\Http\Controllers\micontrolador@registraproducto')->name('registrarproducto');

// GUARDAR PRODUCTO
Route::post('guardarproducto', 'App\Http\Controllers\micontrolador@guardarproducto')->name('guardarproducto');

// CONSULTAR PRODUCTO
Route::get('consultaproducto', 'App\Http\Controllers\micontrolador@consultaproducto')->name('consultaproducto');

//ELIMINAR PRODUCTO
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarproducto')->name('eliminarproducto');

//EDITAR Y MOSTRAR PRODUCTO
Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestraproducto')->name('muestraproducto');
Route::post('editar/{id}', 'App\Http\Controllers\micontrolador@editarproducto')->name('editarproducto');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

