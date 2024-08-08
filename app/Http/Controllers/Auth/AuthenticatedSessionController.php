<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\LoginRequest;

use App\Providers\RouteServiceProvider;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Illuminate\View\View;

use Exception;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {

            $request->authenticate();
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user) {

                if ($user->usertype === 'admin') {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->intended(RouteServiceProvider::HOME);
                }
            }

            return redirect()->route('login')->with('error', 'Authentication failed');

        } catch (Exception $e) {

            Log::error('Authentication exception:', ['message' => $e->getMessage()]);

        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('notification', [
            'message' => 'Successfully Logout',
            'alert-type' => 'success',
        ]);

        return redirect('/');
    }
}
