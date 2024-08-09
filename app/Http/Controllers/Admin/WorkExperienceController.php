<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkExperienceRequest;
use Illuminate\Support\Facades\Log;
use App\Models\Experience;
use Illuminate\Http\Request;

use Exception;

class WorkExperienceController extends Controller
{
    public function viewWorkExperience()
    {
        $experienceSlider = Experience::get();

        return view('pages.admin.work-experience.view-work-experience', [
            'experienceSlider' => $experienceSlider,
        ]);
    }

    public function addFormWorkExperience()
    {
        return view('pages.admin.work-experience.add-work-experience');
    }

    public function storeWorkExperience(WorkExperienceRequest $request)
    {
        try {

            $workExperienceData = [
                'project_name' => $request->project_name,
                'company' => $request->company,
                'company_address' => $request->company_address,
                'role' => $request->role,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'project_summary' => $request->project_summary,
            ];

            if($request->has('isPresent') && $request->isPresent == 'on') {
                $workExperienceData['end_date'] = 'Present';
            }

            Experience::create($workExperienceData);

            session()->flash('notification', [
                'message'    => 'Work experience successfully added!',
                'alert-type' => 'success',
            ]);

            return redirect()->back();

        } catch (Exception $e) {

            Log::error('Exception adding work experience:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while adding the work experience.');
        }
    }

    public function editFormWorkExperience($id)
    {
        $experience = Experience::findOrFail($id);

        return view('pages.admin.work-experience.edit-work-experience', [
            'experience' => $experience,
        ]);
    }

    public function updateWorkExperience(WorkExperienceRequest $request, $id) {
        try {
            $experience = Experience::findOrFail($id);
    
            $workExperienceData = [
                'project_name' => $request->project_name,
                'company' => $request->company,
                'company_address' => $request->company_address,
                'role' => $request->role,
                'start_date' => $request->start_date,
                'end_date' => $request->has('isPresent') ? null : $request->end_date,
                'project_summary' => $request->project_summary,
            ];
    
            if ($request->has('isPresent') && $request->isPresent === 'on') {
                $workExperienceData['end_date'] = 'Present';
            }
    
            $experience->update($workExperienceData);
    
            session()->flash('notification', [
                'message'    => 'Work experience successfully updated!',
                'alert-type' => 'success',
            ]);
    
            return redirect()->back();
    
        } catch (Exception $e) {
            dd('Error:', ['message' => $e->getMessage()]);
            Log::error('Exception updating work experience:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while updating the work experience.');
        }
    }
    

    public function deleteWorkExperience() {
        dd('delete');
    }
}
