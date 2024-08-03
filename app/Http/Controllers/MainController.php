<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

class MainController extends Controller
{
    public function viewProfile() {

        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('pages.admin.profile.view-profile', [
            'profile' => $profile,
        ]);
    }

    public function editProfile() {

        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('pages.admin.profile.edit-profile', [
            'profile' => $profile,
        ]);
    }

    public function updateProfile(Request $request) {
        $id = Auth::user()->id;
        $data = User::find($id);
    
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
    
        if ($request->file('profile')) {
            $file = $request->file('profile');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads'), $filename);
            $data->profile = $filename;
        }
    
        $data->save();
    
        return view('pages.admin.profile.view-profile', [
            'profile' => $data,
        ]);
    }
    
}
