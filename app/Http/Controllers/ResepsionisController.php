<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function index(){
        return view('resepsionis.index',[
            'data' => Pemesanan::all()
        ]);
    }

    public function create(){
        return view('resepsionis.tambah',[
            'data' => Pemesanan::all(),
            'kamar' => Kamar::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'nama_tamu' => ['required'],
            'kamar_id' => ['required'],
            'check_in' => ['required'],
            'check_out' => ['required'],
        ]);

        Pemesanan::create($validasi);
        return redirect('/resepsionis')->with('success','Data berhasil di tambah!');
    }

    public function edit($id){
        return view('resepsionis.edit',[
            'data' => Pemesanan::find($id),
            'kamar' => Kamar::all()
        ]);
    }

    public function update(Request $request,$id){
        $validasi = $this->validate($request,[
            'nama_tamu' => ['required'],
            'kamar_id' => ['required'],
            'check_in' => ['required'],
            'check_out' => ['required'],
        ]);

        Pemesanan::where('id',$id)->update($validasi);
        return redirect('/resepsionis')->with('Edit','Data berhasil di ubah!');
    }

    public function destroy($id){
        $data = Pemesanan::find($id);
        $data->delete();

        return redirect('/resepsionis')->with('Delete','Data berhasil di hapus!');
    }
}
