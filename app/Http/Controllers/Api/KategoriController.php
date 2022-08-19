<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori::latest()->paginate(5);
        return new PostResource(true,"List Data Kategori",$data);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'kategori' => ['required'],
            'hotel_id' => ['required'],
        ]);

        //check if validation fax   ils
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Kategori::create([
            'kategori'     => $request->kategori,
            'hotel_id'     => $request->hotel_id,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }

    public function show(Kategori $kategori){
        // return single post as a resource
        return new PostResource(true,'Data Post Ditemukan!',$kategori);
    }
}
