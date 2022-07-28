<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('login.registrasi');
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'username' => ['required'],
            'role' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $validasi['password'] = bcrypt($validasi['password']);
        User::create($validasi);

        return redirect('/login')->with('success','Registrasi berhasil! Saatnya Login!');
    }
}
