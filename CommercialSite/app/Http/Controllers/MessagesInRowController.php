<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\View\View;

class MessagesInRowController extends Controller
{
    public function messages_in_row(): view
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

        $messages = Messages::all();

        return view('pages.messages_in_row')->with([
            'links' => $links,
            'messages' => $messages,
        ]);
    }
}
