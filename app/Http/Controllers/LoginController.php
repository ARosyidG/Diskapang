<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        // dd('Login');
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // $admins =Admin::all();
        // dd($admins[0]->username); 
        // dd([[$admins[0]->username, $admins[0]->password],$credentials, Auth::guard('admins')->attempt($credentials)]);
        if (Auth::guard('admins')->attempt($credentials)) {
            // dd();
            $request->session()->regenerate();
            return redirect()->intended('/Admin/Berita');
        }
        
        return back()->with('loginError', 'username atau password salah!');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    
}
