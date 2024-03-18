<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenggunaModel;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('auth/daftar');
    }

    public function prosesdaftar(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        DataPenggunaModel::insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Alert::success('Sukses', 'Data Berhasil Ditambah');
        return redirect('/');
    }
}
