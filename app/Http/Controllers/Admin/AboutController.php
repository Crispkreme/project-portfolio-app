<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Image;
use Exception;

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
        try {

            $about_id = $request->aboutId;
            $about = About::findOrFail($about_id);
            
            $updateData = [
                'user_id' => $request->userId,
                'bio' => $request->bio,
                'experience' => $request->experience,
                'experience_summary' => $request->experience_summary,
            ];
    
            $about->update($updateData);
    
            session()->flash('notification', [
                'message'    => 'About Successfully Updated',
                'alert-type' => 'success',
            ]);
    
            return redirect()->back();

        } catch (Exception $e) {

            Log::error('Exception during home slide update:', ['message' => $e->getMessage()]);
            dd('Error:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while updating the home slide.');
            
        }
    }
}
