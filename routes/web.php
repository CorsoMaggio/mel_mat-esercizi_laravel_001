<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return 'welcome';
});

Route::get('/chiSono', function () {
    return 'Mi chiamo melania';
});

Route::get('/somma', function () {
    $a = 60;
    $b = 36;
    $somma = $a + $b;
    return "la somma di $a e $b è: $somma.";
});
