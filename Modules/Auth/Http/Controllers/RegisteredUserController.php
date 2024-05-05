<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Modules\Auth\Entities\Models\VerifyToken;
use Modules\Auth\Http\Mail\WelcomeMail;


class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth::register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        $user = User::create([
            'email'=> $validatedData['email'],
            'password'=> Hash::make($validatedData['password']),
        ]);
    
        $validToken = substr(str_shuffle('0123456789'), 0, 2) . '2022';
    
        $verifyToken = VerifyToken::create([
            'token' => $validToken,
            'email' => $validatedData['email'],
        ]);
    
        Mail::to($validatedData['email'])->send(new WelcomeMail($validatedData['email'], $validToken));
    
        return redirect()->route('verify.token');
    }
    

    public function showVerifyTokenForm()
    {
        return view('auth::verify_token');
    }

    public function verifyToken(Request $request)
    {
        // Validate the token provided by the user
        $request->validate([
            'token' => ['required', 'string'], 
            // Add any additional validation rules if needed
        ]);
    
        // Retrieve the token from the request
        $token = $request->input('token');
        $verifycoursetoken = VerifyToken::where('token', $token)->first();
    
        if ($verifycoursetoken) {
            // Find the user by email
            $user = User::where('email', $verifycoursetoken->email)->first();
    
            // Check if user exists
            if ($user) {
                // Activate the user
                $user->is_activated = 1;
                $user->save();
                $verifycoursetoken->delete();
    
                return redirect('/')->with('activated', 'Your account has been activated successfully');
            } else {
                return redirect('/')->with('error', 'User not found');
            }
        } else {
            return view('auth::verify_token')->with('error', 'Your OTP is invalid. Please check your email OTP first');
        }
    }
    
    
}
