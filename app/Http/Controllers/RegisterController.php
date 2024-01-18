<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register_proses(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);

        $validasi['password_confirmation'] = Hash::make($validasi['password_confirmation']);
        User::create($validasi);

        return redirect('/');
    }
}
