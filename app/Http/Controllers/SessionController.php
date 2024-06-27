<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        // rate limit

        if (RateLimiter::tooManyAttempts('login', $perMinute = 1)) {
            $seconds = RateLimiter::availableIn('login');
            throw ValidationException::withMessages([
                'email' => 'Rate limit. You can try again in '.$seconds.' seconds'
            ]);
        }

        RateLimiter::increment('login');
        // validate
        $attributes = $request->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required']
        ]);

        // check if the user exits and validate
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'The credentials doesnt match'
            ]);
        }
        // reset the session
        $request->session()->regenerate();
        // if exists redirect
        return redirect('/jobs');
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return redirect('/');
    }
}
