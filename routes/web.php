<?php

use App\Http\Controllers\primercontrolador;
use App\Http\Controllers\segundocontrolador;
use App\Http\Controllers\tercercontrolador;
use Illuminate\Support\Facades\Route;



Route::get('/' , [primercontrolador::class, 'mostrarpersonajes']);
Route::get('/persona/{nombre}', [segundocontrolador:: class, 'batman']);
Route::get('/proyectos',[tercercontrolador::class, 'proyectos']);
    