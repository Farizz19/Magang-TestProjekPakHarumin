<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{

    public function index()
    {

        return view('auth/masuk');
    }

    public function prosesmasuk(Request $request)
    {
        if (
            Auth::attempt([
                'username' => $request->username,
                'password' => $request->password
            ])
        ) {
            // session_start();
            $request->session()->put('login', 1);
            $request->session()->put('username', Auth::user()->username);
            $request->session()->regenerate();
            Alert::success('Selamat Datang!', 'Di Lab 281');
            return redirect('/beranda');
        } else {
            return redirect('/')->withErrors('Gagal Login', 'Cek Username atau Password');
        }
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        session_start();
        $request->session()->forget('username');
        $request->session()->invalidate();
        // Alert::success('Selamat Datang!', 'Di Pepustakaan V3');
        return redirect('/');
    }
}
