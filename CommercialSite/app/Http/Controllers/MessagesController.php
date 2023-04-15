<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MessagesController extends Controller
{
    public function messages(): view
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

        return view('pages.messages')->with([
            'links' => $links,
        ]);
    }

    public function addmsg(Request $request, Messages $messages)
    {
        $this->validate($request, [
            'send_for'    => 'required',
            'subject'     => 'string|max:255|required',
            'description' => 'string|required',
        ]);

        if (Auth::user()) {
            $user = Auth::user()->email;
        } else {
            $user = 'Vendég';
        }

        $messages->fill([
           'user'        => $user,
           'send_for'    => $request->send_for,
           'subject'     => $request->subject,
           'description' => $request->description,
        ]);

        $messages->save();

        return redirect()->route('messages.addmsg');
    }
}
