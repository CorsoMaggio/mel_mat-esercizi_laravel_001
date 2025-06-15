<?php

use Illuminate\Support\Facades\Route;

//rotta statita

Route::get('/welcome', function () {
    return 'welcome';
});

Route::get('/chiSono', function () {
    return 'Mi chiamo melania';
});

Route::get('/somma/{a}/{b}', function ($a, $b) {
    $somma = $a + $b;
    return "la somma di $a e $b è: $somma.";
});

//rotta dinamica:si modifica seconda dei casi, ha una parte statica euna parte con una variabile
//negli uri, le variabili vengono scritte tra le parentesi graffe e richiamate nella firma del metodo (tra le parentesi tonde)
Route::get('/print/{nome}', function ($nome) {
    return "Ciao, mi chiamo $nome";
});
