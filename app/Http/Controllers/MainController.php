<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Requests\Auth\ChangePassword;

class MainController extends Controller
{
    public function adminDashboard() {

        session()->flash('notification', [
            'message' => 'Access Granted',
            'alert-type' => 'success',
        ]);

        return view('pages.admin.dashboard');
    }

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
            $filePath = $file->storeAs('public/uploads', $filename);
            $data->profile = Storage::url($filePath);
        }
    
        $data->save();

        session()->flash('notification', [
            'message' => 'Admin Profile updated successfully',
            'alert-type' => 'success',
        ]);

        return view('pages.admin.profile.view-profile', [
            'profile' => $data,
        ]);
    }
    
    public function viewChangePassword() {

        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('pages.admin.auth.change-password', [
            'profile' => $profile,
        ]);
    }

    public function updateChangePassword(ChangePassword $request) {

        $user = Auth::user();

        if (!$user) {
            return back()->withErrors([
                'user' => 'User not authenticated or not found'
            ]);
        }
    
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Current password is incorrect'
            ]);
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        session()->flash('notification', [
            'message' => 'Password updated successfully',
            'alert-type' => 'success',
        ]);
    
        return redirect()->route('admin.dashboard');
    }
}
