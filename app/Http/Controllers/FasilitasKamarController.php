<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    public function index(){
        return view('admin.fasilitaskamar.index',[
            'data' => FasilitasKamar::all(),
        ]);
    }

    public function create(){
        return view('admin.fasilitaskamar.tambah',[
            'data' => FasilitasKamar::all(),
            'kamar' => Kamar::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'kamar_id' => ['required'],
            'nama' => ['required'],
        ]);

        FasilitasKamar::create($validasi);

        return redirect()->route('fasilitaskamar')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('admin.fasilitaskamar.edit',[
            'data' => FasilitasKamar::find($id),
            'kamar' => Kamar::all()
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'kamar_id' => ['required'],
            'nama' => ['required'],
        ]);

        FasilitasKamar::where('id',$id)->update($validasi);

        return redirect()->route('fasilitaskamar')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = fasilitasKamar::find($id);
        $data->delete();

        return redirect()->route('fasilitaskamar')->with('delete','Data berhasil di Hapus!');
    }
}
