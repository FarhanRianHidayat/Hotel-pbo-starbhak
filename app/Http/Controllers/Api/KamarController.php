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
        $data = Kamar::latest()->paginate(5);
        return new PostResource(true,"List Data Kamar",$data);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'hotel_id' => ['required'],
            'kategori_id' => ['required'],
            'jumlah_kamar' => ['required'],
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
            'hotel_id'     => $request->hotel_id,
            'kategori_id'     => $request->kategori_id,
            'jumlah_kamar'   => $request->jumlah_kamar,
        ]);

        //return response
        return new PostResource(true, 'Data Kamar Berhasil Ditambahkan!', $post);
    }

    public function show(Kamar $kamar){
        // return single post as a resource
        return new PostResource(true,'Data Kamar Ditemukan!',$kamar);
    }
    
        public function update(Request $request, Kamar $kamar){
        $validator = Validator::make($request->all(), [
            'hotel_id' => 'required',
            'kategori_id' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $kamar->update([
                'hotel_id'     => $request->hotel_id,
                'kategori_id'   => $request->kategori_id,
                'jumlah_kamar'   => $request->jumlah_kamar,
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
