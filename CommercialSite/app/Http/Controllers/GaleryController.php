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
