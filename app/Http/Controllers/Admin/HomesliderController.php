<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Intervention\Image\ImageManager;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Models\HomeSlide;

use Exception;
class HomesliderController extends Controller
{
    public function viewHomeSlider()
    {
        $homeslider = HomeSlide::find(1);
        
        return view('pages.admin.slider.home-slider', [
            'homeslider' => $homeslider,
        ]);
    }

    public function updateHomeSlider(Request $request) {

        try {

            $slide_id = $request->id;

            if ($request->file('profile')) {

                $file = $request->file('profile');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $image = ImageManager::imagick()->read($filename);
                $image->resize(636, 852);
                $filePath = $image->storeAs('public/uploads', $filename);
                $imageStorage = Storage::url($filePath);

                HomeSlide::findOrFail($slide_id)->update([
                    'title'       => $request->title,
                    'description' => $request->description,
                    'home_slide'  => $imageStorage,
                    'video_url'   => $request->video_url,
                ]);

                session()->flash('notification', [
                    'message' => 'Homeslide Successfully Update',
                    'alert-type' => 'success',
                ]);

                return redirect()->back();

            } else {

                HomeSlide::findOrFail($slide_id)->update([
                    'title'       => $request->title,
                    'description' => $request->description,
                    'video_url'   => $request->video_url,
                ]);

                session()->flash('notification', [
                    'message' => 'Homeslide Successfully Update',
                    'alert-type' => 'success',
                ]);

                return redirect()->back();

            }

        } catch (Exception $e) {
            
            Log::error('Authentication exception:', ['message' => $e->getMessage()]);
            dd('Error: ' . $e->getMessage());
        }

    }
}
