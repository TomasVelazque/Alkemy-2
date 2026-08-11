<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

# -------------------------------

# RUTA PARA MOSTRAR TODOS LOS PRODUCTOS
Route::get('/listar-productos', [ProductoController::class, 'index']);

# RUTA PARA CREAR UN PRODUCTO
Route::post('/crear-producto', [ProductoController::class, 'store']);

# RUTA PARA ACTUALIZAR UN PRODUCTO
Route::put('/actualizar-producto/{id}', [ProductoController::class, 'update']);

# RUTA PARA ELIMINAR UN PRODUCTO
Route::delete('/eliminar-producto/{id}', [ProductoController::class, 'destroy']);

# -------------------------------

# RUTA PARA MOSTRAR TODAS LAS CATEGORIAS
Route::get('/listar-categorias', [CategoriaController::class, 'index']);

# RUTA PARA CREAR UNA CATEGORIA
Route::post('/crear-categoria', [CategoriaController::class, 'store']);

# RUTA PARA ACTUALIZAR UNA CATEGORIA
Route::put('/actualizar-categoria/{id}', [CategoriaController::class, 'update']);

# RUTA PARA ELIMINAR UNA CATEGORIA
Route::delete('/eliminar-categoria/{id}', [CategoriaController::class, 'destroy']);