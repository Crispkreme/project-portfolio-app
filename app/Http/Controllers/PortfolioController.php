<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeSlide;

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
        return view('about');
    }
}
