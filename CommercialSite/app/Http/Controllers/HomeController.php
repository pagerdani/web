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
                'name' => 'Gallery',
                'url' => route('gallery.index'),
            ],
            [
                'name' => 'Send  messages',
                'url' =>  route('messages.index'),
            ],
            [
                'name' => 'View  messages',
                'url' => route('view.messages.index'),
            ],
            [
                'name' => 'Content',
                'url' => 'a',
            ],
            [
                'name' => 'Queue',
                'url' => 'b',
            ]
        ];

        return view('home')->with([
            'links' => $links
        ]);
    }
}
