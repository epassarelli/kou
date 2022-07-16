<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
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
    return view('home');
})->name('home');


/* 
Route::get('productos', [ProductosController::class,'index'])->name('productos.index');
Route::get('productos/create', [ProductosController::class,'create'])->name('productos.create');
Route::post('productos', [ProductosController::class,'store'])->name('productos.store');
Route::get('productos/{id}', [ProductosController::class,'show'])->name('productos.show');
Route::get('productos/{producto}/edit', [ProductosController::class,'edit'])->name('productos.edit');
Route::put('productos/{producto}', [ProductosController::class,'update'])->name('productos.update');
Route::delete('productos/{producto}', [ProductosController::class,'destroy'])->name('productos.destroy');
 */

 //Route::resource('articulos',ProductosController::class)->parameters(['articulos'=>'producto'])->names('productos');
 Route::resource('productos',ProductosController::class);
 Route::view('nosotros','nosotros')->name('nosotros');  //metodo para paginas estaticas