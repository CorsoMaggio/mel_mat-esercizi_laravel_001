<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
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
        return view('about', ['articoli' => $articoli]);
    }

    public function contact()
    {
        return view('contatti');
    }

    public function detail($id)
    {
        $articoli = [
            [
                'id' => 1,
                'title' => 'Siti web',
                'description' => 'realizzo app web',
                'img' => 'https://picsum.photos/seed/picsum/200'
            ],
            [
                'id' => 2,
                'title' => 'app web',
                'description' => 'realizzo app web',
                'img' => 'https://picsum.photos/seed/picsum/200'
            ],

            [
                'id' => 3,
                'title' => 'Malessere',
                'description' => 'Ansia e disagio costante',
                'img' => 'https://picsum.photos/seed/picsum/200'
            ]
        ];
        foreach ($articoli as $articolo) {
            if ($id == $articolo['id']) {
                return view('detail', ['articolo' => $articolo]);
            }
        }
        abort(404);
    }
    /**
     * Display a listing of the resource.
     */
}
