<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(LoginStoreRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            $user = User::where('email',  $request->email)
            ->first();
            Auth::Login($user);
            return redirect('/')->with('success', 'ورود با موفقیت انجام شد');
        } else {
            return back()->with('error', 'ایمیل یا نام کاربری صخیخ نمی باشد');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
