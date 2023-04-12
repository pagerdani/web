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
                'name' => 'Galery',
                'url' => route('gallery.index'),
            ],
            [
                'name' => 'Contact',
                'url' => '#',
            ],
            [
                'name' => 'Messages',
                'url' => '#',
            ],
            [
                'name' => 'Content',
                'url' => '#',
            ],
            [
                'name' => 'Queue',
                'url' => '#',
            ]
        ];

        $photos = Photos::all();

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

        session()->flash('success', 'Image Upload successfully');

        return redirect()->route('gallery.store');
    }
}
