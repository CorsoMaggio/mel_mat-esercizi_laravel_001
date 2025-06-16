<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//rotta statica

Route::get('/welcome', [PageController::class, 'about']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contatti', [PageController::class, 'contact']);

//rotta dinamica:si modifica seconda dei casi, ha una parte statica euna parte con una variabile
//negli uri, le variabili vengono scritte tra le parentesi graffe e richiamate nella firma del metodo (tra le parentesi tonde)


Route::get('/dettaglio/{id}', [PageController::class, 'detail']);
