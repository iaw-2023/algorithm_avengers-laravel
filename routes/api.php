<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;

use App\Http\Controllers\CompraController;
use App\Http\Resources\CompraResource;
use App\Models\Compra;

use App\Http\Controllers\ClienteController;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;

use App\Http\Controllers\CategoriaController;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Productos
Route::get('productos', function(){
    return ProductoResource::collection(Producto::all());
});
Route::get('productos/{id}', function(string $id){
    return new ProductoResource(Producto::findOrFail($id));
});
/* Estos me tiran error y no sé por qué
Route::post('productos', 'ProductoController@store');
Route::put('productos/{id}', 'ProductoController@update');
Route::delete('productos/{id}', 'ProductoController@destroy');
*/
// Compras
Route::get('compras/{id}', function(string $id){
    return new CompraResource(Compra::findOrFail($id));
});
Route::get('compras', function(){
    return CompraResource::collection(Compra::all());
});

// Clientes
Route::get('clientes/{id}', function(string $id){
    return new ClienteResource(Cliente::findOrFail($id));
});
Route::get('clientes', function(){
    return ClienteResource::collection(Cliente::all());
});

// Categorias
Route::get('categorias/{id}', function(string $id){
    return new CategoriaResource(Categoria::findOrFail($id));
});
Route::get('categorias', function(){
    return CategoriaResource::collection(Categoria::all());
});