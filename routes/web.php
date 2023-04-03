<?php

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
    return view('/home');
});

Route::get('/login',function(){
    return view('/login');
});

//Productos
Route::get('/productos/index',[ProductosController::class,'index'])->name('productos_index');
Route::get('/productos/show',[ProductosController::class,'show'])->name('productos_show');
Route::get('/productos/edit/{id}',[ProductosController::class,'edit'])->name('productos_edit');
Route::get('/productos/destroy/{id}',[ProductosController::class,'destroy'])->name('productos_destroy');
Route::post('/productos/store',[ProductosController::class,'store'])->name('productos_store');

Route::get('/productos/consultacodigo/{codigo}',[ProductosController::class,'consultacodigo'])->name('productos_consulta_codigo');
