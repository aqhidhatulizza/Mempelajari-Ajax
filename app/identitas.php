<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    protected $table = 'identitas';
    protected $fillable = ['name,alamat,tanggal_masuk,jenis_kelamin,user_id'];
}
