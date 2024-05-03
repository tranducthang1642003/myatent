<?php

namespace Modules\Auth\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\RegistersUsers; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Modules\Auth\Entities\Models\VerifyToken;
use Modules\Auth\Http\Mail\WelcomeMail; // Corrected import

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth::index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function store(Request $request)
    {   
        $user = User::create([
            'email'=> $request->input('email'),
            'password'=> Hash::make($request->input('password')),
        ]);
        $validToken = substr(str_shuffle('0123456789'), 0, 2) . '2022';
        $token = $validToken;
        $validToken = substr(str_shuffle('0123456789'), 0, 2) . '2022';
        $get_token = new VerifyToken();
        $get_token->token =  $validToken;
        $get_token->email =  $request->input('email');
        $get_token->save();
        $get_user_email = $request->input('email');
        Mail::to($request->input('email'))->send(new WelcomeMail($get_user_email, $validToken));
        return redirect()->route('verify.token')->with('email', $get_user_email);
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
        $verifycoursetoken = Verifytoken::where('token', $token)->first();

        if ($verifycoursetoken) {
            $user = User::where('email', $verifycoursetoken->email)->first();
            $user->is_activated = 1;
            $user->save();
            $verifycoursetoken->delete();
            return redirect('/cv')->with('activated', 'Your account has been activated successfully');
        } else {
            return view('auth::verify_token')->with('error', 'Your OTP is invalid. Please check your email OTP first');
        }
    }
}
