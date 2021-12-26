<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function regist_index()
    {
        return view('Home.Registrasi');
    }

    public function regist(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:15|unique:users',
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|min:9|max:12',
            'tanggal_lahir' => 'required',
            'kata_sandi' => 'required|min:5',
            'foto_user' => 'required'
        ]);

        $validateData['kata_sandi'] = Hash::make($validateData['kata_sandi']);

        User::create($validateData);

        $request->session()->flash('registered', 'Registrasi Berhasil! Silahkan Login');

        return redirect('/login');
    }
}
