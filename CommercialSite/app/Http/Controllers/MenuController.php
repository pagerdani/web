<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MenuController extends Controller
{
    public function menu(): view
    {
        $links = [
            [
                'name' => 'Introduction',
                'url' => route('introduction'),
            ],
            [
                'name' => 'Galery',
                'url' => route('gallery.index'),
            ]
        ];

        return view('parts.menu')->with([
            'links' => $links
        ]);
    }
}
