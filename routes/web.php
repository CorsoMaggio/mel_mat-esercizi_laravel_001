<?php

use Illuminate\Support\Facades\Route;

//rotta statica

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $articoli = [
        [
            'id' => 1,
            'title' => 'Siti web',
            'description' => 'realizzo app web'
        ],
        [
            'id' => 2,
            'title' => 'app web',
            'description' => 'realizzo app web'
        ],

        [
            'id' => 3,
            'title' => 'Malessere',
            'description' => 'Ansia e disagio costante'
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

Route::get('/dettaglio/{id}', function ($id) {
    $articoli = [
        [
            'id' => 1,
            'title' => 'Siti web',
            'description' => 'realizzo app web'
        ],
        [
            'id' => 2,
            'title' => 'app web',
            'description' => 'realizzo app web'
        ],

        [
            'id' => 3,
            'title' => 'Malessere',
            'description' => 'Ansia e disagio costante'
        ]
    ];
    foreach ($articoli as $articolo) {
        if ($id == $articolo['id']) {
            return view('detail', ['articolo' => $articolo]);
        }
    }
    abort(404);
});
