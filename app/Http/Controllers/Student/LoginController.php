<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function studentLogin() {
        return view('student.login');
    }

    public function doAuthentication(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = User::where('email', $request->email)->where('status',0)->first();
        if(!empty($data)){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('student/dashboard');
            }
        }
        return redirect()->back()->with('username','The provided credentials do not match our records.');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
