<?php

namespace App\Http\Controllers\Auth\Passwords;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class ForgetPasswordController extends Controller
{
    public function requestPassword(): View
    {
        return view('auth.passwords.email');
    }

    public function sendEmailPassword(Request $request): RedirectResponse
    {
        try {
            $email = $request->only('email');

            $validator = Validator::make($email, ['email' => 'required|exists:users,email']);

            if ($validator->fails())
                return back()->with(['error' => $validator->messages()->first()]);

            $status = Password::sendResetLink($email);

            if (!$status == Password::RESET_LINK_SENT)
                return back()->with(['error' => 'Reset link not sent']);

            return redirect()->route('resetEmailSentSuccessfully', [
                'email' => $email
            ]);
        } catch (Exception) {
            return back()->with(['error' => 'Something went wrong!']);
        }
    }

    public function emailSentSuccessfully(Request $request): View|RedirectResponse
    {
        $email = $request['email'];
        $storedToken = DB::table('password_resets')->where('email', $email)->first();

        if (! $storedToken || $storedToken->created_at < now()->subHour())
            return back()->with(['error' => 'Something went wrong!']);

        return view('auth.passwords.sentSuccessfully', with([
            'success' => 'Reset email has sent successfully.'
        ]));
    }
}
