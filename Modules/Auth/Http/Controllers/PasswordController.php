<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class PasswordController extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user = User::where('email', $request->session()->get('email'))->first();

        if (!$user || $user->password_reset_token !== $request->session()->get('token')) {
            return redirect()->route('login')->with('error', 'Invalid or expired token.');
        }

        $user->update([
            'password' => Hash::make($request->password),
            'password_reset_token' => null,
        ]);

        return redirect()->route('login')->with('status', 'Your password has been updated. Please login with your new password.');
    }
}
