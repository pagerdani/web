<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IntroductionController extends Controller
{
    public function introduction(): view
    {
        return view('pages.introduction');
    }
}