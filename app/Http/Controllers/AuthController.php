<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function prosesmasuk(Request $request)
    {
        if (
            Auth::attempt([
                'username' => $request->username,
                'password' => $request->password
            ])
        ) {
            $request->session()->put('login', 1);
            $request->session()->put('username', Auth::user()->username);
            $request->session()->regenerate();
            // Alert::success('sukses', 'welcome');
            return redirect('/beranda');
        } else {
            return redirect('/');
        }
    }
}
