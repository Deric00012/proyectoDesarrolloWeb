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

Route::get('/imprimir', [App\Http\Controllers\imprimirPdfController::class, 'imprimir'])->name('imprimir');//productos
Route::get('/imprimir/proveedores', [App\Http\Controllers\imprimirPdfController::class, 'imprimirProveedores'])->name('imprimirProveedores');
Route::get('/imprimir/clientes', [App\Http\Controllers\imprimirPdfController::class, 'imprimirClientes'])->name('imprimirClientes');
Route::get('/imprimir/inventario', [App\Http\Controllers\imprimirPdfController::class, 'imprimirInventario'])->name('imprimirInventario');
Route::get('/imprimir/ventas', [App\Http\Controllers\imprimirPdfController::class, 'imprimirVentas'])->name('imprimirVentas');
Route::resource('cursos', App\Http\Controllers\cursoController::class);