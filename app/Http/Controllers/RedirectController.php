<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function about()
    {
        return redirect('about-us');
    }

    public function service()
    {
        return redirect('tyre-service-dubai');
    }

    public function contact()
    {
        return redirect('contact-us');
    }
}
