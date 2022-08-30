<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index(){
        $data = Kamar::with('kategori')->get();
        return new PostResource(true,"List Data Kamar",$data);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            // 'hotel_id' => ['required'],
            'kategori_id' => ['required'],
            'jumlah_kamar' => ['required'],
            'harga' => ['required'],
        ]);

        //check if validation fax   ils
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Kamar::create([
            // 'hotel_id'     => $request->hotel_id,
            'kategori_id'     => $request->kategori_id,
            'jumlah_kamar'   => $request->jumlah_kamar,
            'harga'         => $request->harga
        ]);

        //return response
        return new PostResource(true, 'Data Kamar Berhasil Ditambahkan!', $post);
    }

    public function show($id){
        // return single post as a resource
        $data = Kamar::with('kategori')->where('id',$id)->first();
        return new PostResource(true,'Data Kamar Ditemukan!',$data);
    }
    
    public function update(Request $request, Kamar $kamar){
        $validator = Validator::make($request->all(), [
            // 'hotel_id' => 'required',
            'kategori_id' => ['required'],
            'jumlah_kamar' => ['required'],
            'harga' => ['required'],
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kamar->update([
                // 'hotel_id'     => $request->hotel_id,
                'kategori_id'   => $request->kategori_id,
                'jumlah_kamar'   => $request->jumlah_kamar,
                'harga'   => $request->harga,
            ]);
        return new PostResource(true, 'Data Kamar Berhasil Diubah!', $kamar);
    }

    public function destroy(Kamar $kamar)
    {
        //delete image
        // Storage::delete('public/posts/'.$post->image);

        //delete post
        $kamar->delete();

        //return response
        return new PostResource(true, 'Data Kamar Berhasil Dihapus!', null);
    }

}
