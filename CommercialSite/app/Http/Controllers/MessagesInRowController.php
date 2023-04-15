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

        $messages = Messages::all();

        return view('pages.messages_in_row')->with([
            'links' => $links,
            'messages' => $messages,
        ]);
    }
}
