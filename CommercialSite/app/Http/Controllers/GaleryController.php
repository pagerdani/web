<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Photos;

class GaleryController extends Controller
{
    public function gallery(): view
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

        $photos = Photos::all()->take(4);

        return view('pages.galery')->with([
            'links' => $links,
            'photos' => $photos
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $photo_path = $request->file('image')->store('image', 'public');

        $data = Photos::create([
            'photo_path' => $photo_path,
        ]);

        $data->save();

        return redirect()->route('gallery.store');
    }
}
