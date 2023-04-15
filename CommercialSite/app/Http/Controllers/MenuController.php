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
                'name' => 'Messages in row',
                'url' => route('messages.all'),
            ],

        ];

        return view('parts.menu')->with([
            'links' => $links
        ]);
    }
}
