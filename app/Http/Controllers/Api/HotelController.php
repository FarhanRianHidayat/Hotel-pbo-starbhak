<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index(){
        $data = Hotel::latest()->get();
        return new PostResource(true,"List Data Hotel",$data);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_hotel' => ['required'],
            'alamat' => ['required'],
        ]);

        //check if validation fax   ils
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Hotel::create([
            'nama_hotel'     => $request->nama_hotel,
            'alamat'     => $request->alamat,
        ]);

        //return response
        return new PostResource(true, 'Data Hotel Berhasil Ditambahkan!', $post);
    }

    public function show(Hotel $hotel){
        // return single post as a resource
        return new PostResource(true,'Data Hotel Ditemukan!',$hotel);
    }

        public function update(Request $request, Hotel $hotel){
        $validator = Validator::make($request->all(), [
            'nama_hotel' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $hotel->update([
                'nama_hotel'     => $request->nama_hotel,
                'alamat'   => $request->alamat,
            ]);
        return new PostResource(true, 'Data Hotel Berhasil Diubah!', $hotel);
    }

        public function destroy(Hotel $hotel)
    {
        //delete image
        // Storage::delete('public/posts/'.$post->image);

        //delete post
        $hotel->delete();

        //return response
        return new PostResource(true, 'Data Hotel Berhasil Dihapus!', null);
    }
}
