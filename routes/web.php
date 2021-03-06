<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendaController;
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

/* Route::get('/', function () {
    $arrayClientes = ["juan","pedro","ricardo"];
    return view('clientes.clientes')->with("nombres",$arrayClientes);
}); */

Route::resource('clientes',ClientesController::class);
Route::resource('productos',ProductosController::class);
Route::resource('tienda',TiendaController::class);

Route::get('/register',function(){
    return view('register.register');
});

Route::get('/login',function(){
    return view("login.login");
});

Route::get('/contact',function(){
    return view('contact.contact');
});

Route::get('/cart',function(){
    return view('cart.cart');
});
Route::get('/catalogo',function(){
    return view('catalogo.catalogo');
});
Route::get('/sale',function(){
    return view('sale.sale');
});


