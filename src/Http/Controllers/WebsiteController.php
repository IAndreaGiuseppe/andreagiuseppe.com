<?php

namespace Iag\Agws\Http\Controllers;

use Illuminate\Routing\Controller;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('agws::homepage.page');
    }

    public function services()
    {
        return view('agws::services.page')
            ->with('title', 'Services');
    }

    public function cv()
    {
        return view('agws::cv.page')
            ->with('title', 'Curriculum Vitae');
    }
}
