<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IntroductionController extends Controller
{
    public function introduction(): view
    {
        $links = [
            [
                'name' => 'Bemutatkozás',
                'url' => route('introduction'),
            ],
            [
                'name' => 'Galéria',
                'url' => route('gallery.index'),
            ],
            [
                'name' => 'Üzenet küldés',
                'url' =>  route('messages.index'),
            ],
            [
                'name' => 'Saját üzenetek',
                'url' => route('view.messages.index'),
            ],
            [
                'name' => 'Összes üzenet sorban',
                'url' => route('messages.all'),
            ],

        ];

        return view('pages.introduction')->with([
            'links' => $links
        ]);
    }
}
