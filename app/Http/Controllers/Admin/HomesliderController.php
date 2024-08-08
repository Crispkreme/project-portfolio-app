<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Models\HomeSlide;

use Exception;
use Image;

class HomesliderController extends Controller
{
    public function viewHomeSlider()
    {
        $homeslider = HomeSlide::find(1);
        
        return view('pages.admin.slider.home-slider', [
            'homeslider' => $homeslider,
        ]);
    }

    public function updateHomeSlider(Request $request): RedirectResponse
    {
        try {

            $slide_id = $request->id;
            $homeSlide = HomeSlide::findOrFail($slide_id);
            
            $updateData = [
                'title'       => $request->title,
                'description' => $request->description,
                'video_url'   => $request->video_url,
            ];
            
            if ($request->hasFile('home_slide')) {
                
                $file = $request->file('home_slide');
                $filename = $file->getClientOriginalName();
                $oldpath = $homeSlide->home_slide;
                $oldfilename = basename($oldpath);

                $oldfilepath = 'uploads/' . $oldfilename;

                if ($oldfilename == $filename) {
                    if (Storage::disk('public')->exists($oldfilepath)) {
                        Storage::disk('public')->delete($oldfilepath);
                    }
                }

                $filePath = 'public/uploads/banner/' . $filename;  

                $image = Image::make($file);
                $image->resize(1000, 1000);
                $image->save(storage_path('app/' . $filePath));
                $imageStorage = Storage::url($filePath);
    
                $updateData['home_slide'] = $imageStorage;
            }
    
            $homeSlide->update($updateData);
    
            session()->flash('notification', [
                'message'    => 'Homeslide Successfully Updated',
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
