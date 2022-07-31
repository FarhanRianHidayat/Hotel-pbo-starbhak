<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FasilitasUmumController extends Controller
{
    public function index(){
        return view('admin.fasilitasumum.index',[
            'data' => FasilitasUmum::all(),
        ]);
    }

    public function create(){
        return view('admin.fasilitasumum.tambah',[
            'data' => FasilitasUmum::all(),
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required']
        ]);

        // $data = FasilitasUmum::create($validasi);

        // if($request->hasFile('image')){
        //     $request->file('image')->move('fasilitas/',$request->file('image')->getClientOriginalName());
        //     $data->image = $request->file('image')->getClientOriginalName();
        //     $data->save();
        // }
        if($request->file('image')){
            $validasi['image'] = $request->file('image')->store('data-image');
        }

        FasilitasUmum::create($validasi);

        return redirect()->route('fasilitasumum')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('admin.fasilitasumum.edit',[
            'data' => FasilitasUmum::find($id),
 
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required']
        ]);

        if($request->file('image')){
            if($request->poto){
                Storage::delete($request->poto);
            }
            $validasi['image'] = $request->file('image')->store('data-image');
        }

        FasilitasUmum::where('id',$id)->update($validasi);
        // if($request->hasFile('image')){
        //     $request->file('image')->move('fasilitas/',$request->file('image')->getClientOriginalName());
        //     $data->image = $request->file('image')->getClientOriginalName();
        //     $data->save();
        // }

        return redirect()->route('fasilitasumum')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){

        $post = FasilitasUmum::find($id);
        if($post->image){
            Storage::delete($post->image);
        }

        $data = FasilitasUmum::find($id);
        $data->delete();

        return redirect()->route('fasilitasumum')->with('delete','Data berhasil di Hapus!');
    }
}
