<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('proveedors', App\Http\Controllers\proveedorController::class);
Route::resource('productos', App\Http\Controllers\productoController::class);
Route::resource('inventarios', App\Http\Controllers\inventarioController::class);
Route::resource('clientes', App\Http\Controllers\clienteController::class);
Route::resource('ventas', App\Http\Controllers\ventaController::class);