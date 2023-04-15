<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ViewMessageController extends Controller
{
    public function view_messages(): view
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

        $messages = Messages::whereSendFor(Auth::user()->id)->get();

        return view('pages.view_messages')->with([
            'links' => $links,
            'messages' => $messages,
        ]);
    }
}
