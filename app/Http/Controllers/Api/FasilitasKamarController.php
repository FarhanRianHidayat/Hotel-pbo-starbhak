<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\FasilitasKamar;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class FasilitasKamarController extends Controller
{
    public function index(){
        $data = FasilitasKamar::latest()->paginate(5);
        return new PostResource(true,"List Data Fasilitas Kamar",$data);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'kategori_id' => ['required'],
            'nama_fasilitas' => ['required'],
        ]);

        //check if validation fax   ils
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = FasilitasKamar::create([
            'kategori_id'     => $request->kategori_id,
            'nama_fasilitas'     => $request->nama_fasilitas,
        ]);

        //return response
        return new PostResource(true, 'Data Fasilitas Kamar Berhasil Ditambahkan!', $post);
    }

    public function show(FasilitasKamar $fasilitaskamar){
        // return single post as a resource
        return new PostResource(true,'Data Fasilitas Kamar Ditemukan!',$fasilitaskamar);
    }
}
