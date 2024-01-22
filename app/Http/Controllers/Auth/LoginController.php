<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }
    public function checkCredentials(Request $request): RedirectResponse
    {
        try {
            $credentials = $request->only('email', 'password');

            $validator = Validator::make($credentials, [
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            if ($validator->fails())
                return back()->with(['error' => $validator->messages()->first()]);

            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }

            return back()->with(['error' => 'Check your credentials and try again']);
        } catch (Exception) {
            return back()->with(['error' => 'Something went wrong!']);
        }
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
