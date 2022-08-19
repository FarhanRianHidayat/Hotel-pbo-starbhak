<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    
    use HasFactory;

    protected $table = 'kategoris';
    protected $guarded = [''];

    protected function kamar(){
        return $this->hasMany(kamar::class);
    }
    protected function hotel(){
        return $this->hasMany(kamar::class);
    }

    protected function fasilitas_kamar(){
        return $this->hasMany(fasilitas_kamar::class);
    }

}
