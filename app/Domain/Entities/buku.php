<?php
namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;
class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['id', 'nama_buku', 'jenis_buku', 'harga_buku'];

}