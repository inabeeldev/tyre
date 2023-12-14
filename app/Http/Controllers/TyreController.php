<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TyreController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function service()
    {
        return view('service');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function team()
    {
        return view('team');
    }

    public function error()
    {
        return view('404');
    }
}
