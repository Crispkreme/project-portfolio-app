<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

use App\Models\HomeSlide;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index() {
        $homeslider = HomeSlide::find(1);
        
        return view('welcome', [
            'homeslider' => $homeslider,
        ]);
    }

    public function aboutPage()
    {
        $aboutslider = About::find(1);
        $user = Auth::user();

        return view('about', [
            'aboutslider' => $aboutslider,
            'user' => $user,
        ]);
    }
}
