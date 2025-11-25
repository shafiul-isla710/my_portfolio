<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!password_verify($request->password, $user->password)) {
            return redirect()->route('login-page')->with('error', 'Invalid credentials.');
        }

        // Store user id in session (best way)
        session(['user_id' => $user->id]);

        $otp = rand(100000, 999999);

        Otp::updateOrCreate(
            ['user_id'=>$user->id],
            ['otp'=>$otp]
        );

        return redirect()->route('dashboard')->with('success', 'OTP sent to your email.');
    }

    public function logout(Request $request)
    {
        $user_id = session('user_id');

        $otp = new Otp();
        $otp->where('user_id', $user_id)->delete();

        $request->session()->flush();
        return redirect()->route('home-page')->with('success', 'Logged out successfully.');
    }
}
