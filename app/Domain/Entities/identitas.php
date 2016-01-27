<?php
namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;
class identitas extends Model
{
    protected $table = 'identitas';
    protected $fillable = ['nama', 'alamat', 'tanggal_masuk', 'jenis_kelamin', 'user_id'];

}