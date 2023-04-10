<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IntroductionController extends Controller
{
    public function introduction(): view
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

        return view('pages.introduction')->with([
            'links' => $links
        ]);
    }
}