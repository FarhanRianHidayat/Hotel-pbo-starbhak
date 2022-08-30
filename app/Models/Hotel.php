<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';
    protected $guarded = [''];

    protected function kategori(){
        return $this->hasMany(Kategori::class);
    }
}
