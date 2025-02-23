<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function login() {
        return view('admin.login');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'Logout successfully');
    }

    public function profile() {
        return view('admin.profile');
    }

    public function forgetPassword() {
        return view('admin.forget-password');
    }

    public function resetPassword() {
        return view('admin.reset-password');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password']
        ];

        if(Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin_dashboard')->with('success', 'Login successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
