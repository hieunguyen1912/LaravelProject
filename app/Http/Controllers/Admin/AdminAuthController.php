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

        
    }
}
