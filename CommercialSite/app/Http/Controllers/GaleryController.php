<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GaleryController extends Controller
{
    public function galery(): view
    {
        $links = [
            [
                'name' => 'Introduction',
                'url' => route('introduction'),
            ],
            [
                'name' => 'Galery',
                'url' => route('galery'),
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

        return view('pages.galery')->with([
            'links' => $links
        ]);
    }
}