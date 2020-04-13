<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	
    protected $guarded = [];

    protected $table = 'siswa';

    protected $fillable = [
         'nis', 'nama', 'kelas', 'nomor_hp'
    ];
}
