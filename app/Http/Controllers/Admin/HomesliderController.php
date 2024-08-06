<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;

class HomesliderController extends Controller
{
    public function viewHomeSlider()
    {
        $homeslider = HomeSlide::find(1);
        
        return view('pages.admin.slider.home-slider', [
            'homeslider' => $homeslider,
        ]);
    }
}
