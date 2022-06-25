<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('backend.auth.register');
    }

    public function saveregister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/admin/login');
    }

    public function login()
    {
        return view('backend.auth.login');
    }

    public function savelogin(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = User::where('email', $request->email)->firstOrFail();
        if ($data) {
            if (Hash::check($request->password,$data->password)) {
                
                session(['Login Succeed' => true]);
            }
        }
        return redirect('/admin');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }
}
