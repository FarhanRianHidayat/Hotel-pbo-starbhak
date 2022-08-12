<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('page.home');
    }
    
    public function kamar(){
        return view('page.kamar');
    }

    public function fasilitas(){
        
        return view('page.fasilitas',[
            'data' => FasilitasUmum::all()
        ]);
    }

    public function reservasi(){
        return view('page.reservasi',[
            'data' => Pemesanan::all()
        ]);
    }
}
