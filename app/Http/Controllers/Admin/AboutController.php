<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Image;

class AboutController extends Controller
{
    public function viewAboutSlider()
    {
        $aboutslider = About::find(1);
        $userid = Auth::user()->id;
        $user = User::find($userid);

        return view('pages.admin.about-slider.view-about', [
            'aboutslider' => $aboutslider,
            'user' => $user,
        ]);
    }

    public function updateAboutSlider(Request $request)
    {

    }
}
