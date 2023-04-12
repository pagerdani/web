<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function home():view
    {
        $links = [
            [
                'name' => 'Introduction',
                'url' => route('introduction'),
            ],
            [
                'name' => 'Galery',
                'url' => route('gallery.index'),
            ],
            [
                'name' => 'Contact',
                'url' => '#',
            ],
            [
                'name' => 'Messages',
                'url' => '#',
            ],
            [
                'name' => 'Content',
                'url' => '#',
            ],
            [
                'name' => 'Queue',
                'url' => '#',
            ]
        ];

        return view('home')->with([
            'links' => $links
        ]);
    }
}
