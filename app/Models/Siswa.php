<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
   // protected $primarykey = 'id_siswa';
    protected $guarded = ['id'];
    //join table siswa ke table sekolah(many to one relation)
    function sekolah(){
        return $this->belongsTo(Sekolah::class);
    }

}
