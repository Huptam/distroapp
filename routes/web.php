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

//Login
Route::get('/', function () {
    return view('index.index');
})->name('index');
//Registro
Route::get('/register', function () {
    return view('index.register');
})->name('register');
//Olvidar contraseña
Route::get('/resetPassword', function () {
    return view('index.resetPassword');
})->name('resetPassword');

//Cliente Dashboard
Route::get('/dashboard', function () {
    return view('client.dashboard');
})->name('dashboard');
//Cliente Perfil
Route::get('/perfilCliente', function () {
    return view('client.perfil');
})->name('perfilCliente');
//Cliente listar productos
Route::get('/listarProductos', function () {
    return view('client.listarProductos');
})->name('listarProductos');
//Cliente listar admins
Route::get('/listarAdmin', function () {
    return view('client.listarAdmin');
})->name('listarAdmin');

//Administrador dashboard
Route::get('/dashboardAdmin', function () {
    return view('admin.dashboard');
})->name('dashboardAdmin');
//Administrador perfil
Route::get('/perfilAdmin', function () {
    return view('admin.perfil');
})->name('perfilAdmin');
//Administrador agregar productos
Route::get('/agregarProducto', function () {
    return view('admin.agregarProducto');
})->name('agregarProducto');
//Administrador gestionar productos
Route::get('/gestionarProducto', function () {
    return view('admin.gestionarProducto');
})->name('gestionarProducto');
//Administrador registar clientes
Route::get('/registrarCliente', function () {
    return view('admin.registrarCliente');
})->name('registrarCliente');
//Administrador gestionar clientes
Route::get('/gestionarCliente', function () {
    return view('admin.gestionarCliente');
})->name('gestionarCliente');
//Administrador registar admin
Route::get('/registrarAdmin', function () {
    return view('admin.registrarAdmin');
})->name('registrarAdmin');
//Administrador gestionar admins
Route::get('/gestionarAdmin', function () {
    return view('admin.gestionarAdmin');
})->name('gestionarAdmin');

//Error 401
Route::get('/error401', function () {
    return view('error.401');
})->name('error401');
//Error 404
Route::get('/error404', function () {
    return view('error.404');
})->name('error404');
//Error 5000
Route::get('/error500', function () {
    return view('error.500');
})->name('error500');
