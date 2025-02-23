<?php

namespace App\Http\Controllers;

use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{
    public function home() {
        return view('front.home');
    }

    public function about() {
        return view('front.about');
    }

    public function registration() {
        return view('front.registration');
    }

    public function login() {
        return view('front.login');
    }

    public function forget_password() {
        return view('front.forget_password');
    }

    public function registration_submit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $token = hash('sha256', time());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->token = $token;
        $user->save();

        $verification_link = route('registration_verify_email', ['email' => $request->email, 'token' => $token]);
        $subject = 'User Account Verification';
        $message = 'Please click the following link to verify your email:<br> <a href="'.$verification_link.'">Verify Email</a>';
        Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', 'Registration is Successfull, but you have to verify your email. Please check your email');
    }

    public function registration_verify_email($email, $token) {
        $user = User::where('token',$token)->where('email',$email)->first();
        if(!$user) {
            return redirect()->route('login');
        }
        $user->token = '';
        $user->status = 1;
        $user->update();

        return redirect()->route('login')->with('success', 'Your email is verified. You can login now.');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
            'status' => 1
        ];


        if(Auth::guard('web')->attempt($data)) {
            return redirect()->route('user_dashboard')->with('success', 'Login successfully');
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }
}
