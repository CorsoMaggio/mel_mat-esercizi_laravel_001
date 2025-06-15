<?php

use Illuminate\Support\Facades\Route;

//rotta statica

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $articoli = [
        [
            'titolo' => 'Articolo1',
            'descrizione' => 'Una guida per principianti sul linguaggio PHP.',
            'autore' => 'Mario Rossi'
        ],
        [
            'titolo' => 'Laravel per tutti',
            'descrizione' => 'Scopri come costruire applicazioni web con Laravel.',
            'autore' => 'Lucia Bianchi'
        ],

        [
            'titolo' => 'Programmazione moderna in PHP',
            'descrizione' => 'Tecniche avanzate e best practices nel 2025.',
            'autore' => 'Giovanni Verdi'
        ]
    ];
    $cose = ['Viva i gattini', 'Ma chi te vole', 'Eclissati'];
    return view('about', ['cose' => $cose, 'articoli' => $articoli]);
});

Route::get('/contatti', function () {
    return view('contatti');
});

//rotta dinamica:si modifica seconda dei casi, ha una parte statica euna parte con una variabile
//negli uri, le variabili vengono scritte tra le parentesi graffe e richiamate nella firma del metodo (tra le parentesi tonde)
Route::get('/print/{nome}', function ($nome) {
    return "Ciao, mi chiamo $nome";
});
