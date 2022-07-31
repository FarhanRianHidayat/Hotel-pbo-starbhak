<?php

namespace App\Models;

use App\Models\Pemesanan;
use App\Models\FasilitasKamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';
    protected $guarded = [''];

    protected function kamar(){
        return $this->hasMany(FasilitasKamar::class);
    }

    protected function pemesanan(){
        return $this->hasMany(Pemesanan::class);
    }
}
