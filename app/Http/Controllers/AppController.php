<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('app.home');
    }
    
    public function kamar(){
        return view('app.kamar');
    }

    public function fasilitas(){
        
        return view('app.fasilitas');
    }
}
