<?php

namespace App\Http\Controllers\Auth\Passwords;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request): View|RedirectResponse
    {
        $email = $request['email'];
        $storedToken = DB::table('password_resets')->where('email', $email)->first();

        if (! $storedToken || $storedToken->created_at < now()->subHour())
            return redirect()->route('login')->with(['error' => __('messages.errors.something_wrong')]);

        return view('auth.passwords.reset')->with([
            'email' => $email,
            'token' => $request['token']
        ]);
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        try {
            $data = $request->only('email', 'password', 'password_confirmation', 'token');
            $validator = Validator::make($data, [
                'email' => ['required', 'email', 'exists:password_resets,email', function ($attribute, $value, $fail) {
                    $email = DB::table('password_resets')->where('email', $value) ->first();
                    if (! $email || $email->created_at < now()->subHour()) {
                        $fail('The email has expired.');
                    }
                },
                ],
                'token' => ['required'],
                'password' => 'required|string|min:8|max:16|confirmed|regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/',
            ]);

            if ($validator->fails())
                return back()->with([ 'error' => $validator->messages()->first() ]);

            $user = User::where('email', $data['email'])->first();

            if (! Password::broker()->tokenExists($user, $data['token'])) {
                return back()->with([ 'error' => __('messages.errors.token_expired')]);
            }

            User::query()->where('email', $data['email'])->update([
                'password' => Hash::make($data['password']),
            ]);

            DB::table('password_resets')->where('created_at', '<', now()->subHour())->delete();
            DB::table('password_resets')->where('email', $data['email'])->delete();

            return redirect()->route('login')->with([
                'success' => 'Password updated successfully'
            ]);
        } catch (Exception) {
            return back()->with(['error' => __('messages.errors.something_wrong')]);
        }
    }
}
