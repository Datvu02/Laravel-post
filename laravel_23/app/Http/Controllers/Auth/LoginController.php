<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function create()
    {
        # code...
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        # code...
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/');
    }

    public function authenticate(Request $request)
    {
        # code...
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('admin/');
        };
        return back()->withErrols([
            'email' => 'errol'
        ]);
      }
}
