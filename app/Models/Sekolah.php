<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';
    protected $guarded = ['id'];
     //join table sekolah ke table siswa (one to many relation)
    function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
