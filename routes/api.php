<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('rest/productos', function(){
    return ProductoResource::collection(Producto::all());
});
Route::get('rest/productos/{id}', function(string $id){
    return new ProductoResource(Producto::findOrFail($id));
});
Route::post('rest/productos', 'ProductoController@store');
Route::put('rest/productos/{id}', 'ProductoController@update');
Route::delete('rest/productos/{id}', 'ProductoController@destroy');

// Compras
Route::get('rest/compras/{id}', function(string $id){
    return new CompraResource(Compra::findOrFail($id));
});
Route::get('rest/compras', function(){
    return CompraResource::collection(Compra::all());
});

// Clientes
Route::get('rest/clientes/{id}', function(string $id){
    return new ClienteResource(Cliente::findOrFail($id));
});
Route::get('rest/clientes', function(){
    return ClienteResource::collection(Cliente::all());
});

// Categorias
Route::get('rest/categorias/{id}', function(string $id){
    return new CategoriaResource(Categoria::findOrFail($id));
});
Route::get('rest/categorias', function(){
    return CategoriaResource::collection(Categoria::all());
});