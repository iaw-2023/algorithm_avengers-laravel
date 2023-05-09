<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use App\Http\Resources\CompraResource;
use App\Models\Compra;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('productos', ProductoController::class);

Route::resource('categorias', CategoriaController::class);

Route::get('/clientes', [ClienteController::class,'index'])->name('clientes');

Route::get('/compras', [CompraController::class, 'index'])->name('compras');

Route::get('rest/productos', function(){
    return ProductoResource::collection(Producto::all());
});
Route::get('rest/productos/{id}', function(string $id){
    return new ProductoResource(Producto::findOrFail($id));
});
Route::get('rest/compras/{id}', function(string $id){
    return new CompraResource(Compra::findOrFail($id));
});
Route::get('rest/compras', function(){
    return CompraResource::collection(Compra::all());
});
Route::get('rest/clientes/{id}', function(string $id){
    return new ClienteResource(Cliente::findOrFail($id));
});
Route::get('rest/clientes', function(){
    return ClienteResource::collection(Cliente::all());
});
Route::get('rest/categorias/{id}', function(string $id){
    return new CategoriaResource(Categoria::findOrFail($id));
});
Route::get('rest/categorias', function(){
    return CategoriaResource::collection(Categoria::all());
});


require __DIR__.'/auth.php';
