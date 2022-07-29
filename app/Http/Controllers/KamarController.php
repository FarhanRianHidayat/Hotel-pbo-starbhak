<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(){
        return view('admin.kamar.index',[
            'kamar' => Kamar::all()
        ]);
    }

    public function create(){
        return view('admin.kamar.tambah',[
            'kamar' => Kamar::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'no_kamar' => ['required'],
            'harga' => ['required'],
            'kapasitas' => ['required'],
            'tipe' => ['required']
        ]);

        Kamar::create($validasi);

        return redirect()->route('kamar')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('admin.kamar.edit',[
            'kamar' => Kamar::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'no_kamar' => ['required'],
            'harga' => ['required'],
            'kapasitas' => ['required'],
            'tipe' => ['required']
        ]);

        Kamar::where('id',$id)->update($validasi);

        return redirect()->route('kamar')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = Kamar::find($id);
        $data->delete();

        return redirect()->route('kamar')->with('delete','Data berhasil di Hapus!');
    }
}
