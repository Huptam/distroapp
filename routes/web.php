<?php

use App\Http\Controllers\ProductsController;
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

//Login (ladingpage)
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
Route::get('/dashboardAdmin', [ProductsController::class, 'index'])->name('dashboardAdmin');
//Administrador perfil
Route::get('/perfilAdmin', function () {
    return view('admin.perfil');
})->name('perfilAdmin');
//Administrador vista agregar producto
Route::get('/agregarProducto', [ProductsController::class, 'create'])->name('agregarProducto');
//Administrador agregar producto
Route::post('/storeProducto', [ProductsController::class, 'store'])->name('storeProducto');
//Administrador gestionar productos
Route::get('/gestionarProducto', [ProductsController::class, 'gestionar'])->name('gestionarProducto');
//Administrador vista mostrar producto
Route::get('/producto/{id}/mostrar', [ProductsController::class, 'show'])->name('mostrarProducto');
//Administrador vista editar producto
Route::get('/editarProducto/{id}', [ProductsController::class, 'edit'])->name('editarProducto');
//Administrador editar producto
Route::put('/updateProducto/{id}', [ProductsController::class, 'update'])->name('updateProducto');
//Administrador eliminar producto
Route::delete('/eliminarProducto/{id}', [ProductsController::class, 'destroy'])->name('eliminarProducto');
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
