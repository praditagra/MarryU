<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function regist_index()
    {
        return view('Home.registrasi');
    }

    public function regist(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:15|unique:users',
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|min:9|max:12',
            'tanggal_lahir' => 'required',
            'password' => 'required|min:5',
            'foto_user' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        $request->session()->flash('registered', 'Registrasi Berhasil! Silahkan Login');

        return redirect('/login');
    }

    public function login_index()
    {
        return view('Home.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
