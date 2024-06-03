<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get("/", [PizzaController::class, "Listar"]);

Route::get('/crear', function () {
    return view('crear');
});

Route::post('/crear', [PizzaController::class,"Crear"]);
