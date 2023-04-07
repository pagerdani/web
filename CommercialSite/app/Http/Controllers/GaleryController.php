<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GaleryController extends Controller
{
    public function galery(): view
    {
        return view('pages.galery');
    }
}