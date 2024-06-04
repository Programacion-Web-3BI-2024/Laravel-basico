<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get("/", [PizzaController::class, "Listar"]);

Route::get("/eliminar/{d}",[PizzaController::class, "Eliminar"]);

Route::get('/crear', function () {
    return view('crear');
});

Route::post('/crear', [PizzaController::class,"Crear"]);

Route::get('/modificar/{d}', [PizzaController::class,"MostrarFormularioDeModificar"]);
Route::post('/modificar', [PizzaController::class,"Modificar"]);