<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function viewLogin()
    {
        return view('user.login', ['error' => '']);
    }

    function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $rs = Auth::attempt(
            ['email' => $email, 'password' => $password]
        );

        if ($rs == true) {
            $user = Auth::user();
            if ($user != null) {
                return redirect('admin/home');

        } else {
            $error = 'Thông tin đăng nhập sai';
            return view('user/login', ['error' => $error]);
           
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    }
}
