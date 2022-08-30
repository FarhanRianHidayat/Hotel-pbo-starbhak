<?php

namespace App\Models;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    
    use HasFactory;

    protected $table = 'kategoris';
    protected $guarded = [''];

    protected function kamar(){
        return $this->hasMany(kamar::class);
    }

    public function hotel(){
        return $this->belongsTo(hotel::class,'hotel_id');
    }

    protected function fasilitas_kamar(){
        return $this->hasMany(fasilitas_kamar::class);
    }

}
