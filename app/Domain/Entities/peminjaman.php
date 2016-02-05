<?php
namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;
class peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['id','id_buku', 'id_identitas', 'lama_hari', 'tanggal_pinjam', 'tanggal_kembali'];
    protected $with =['buku','identitas'];


    public function buku(){
        return $this->belongsTo('App\Domain\Entities\Buku','id_buku');
    }
    public function identitas(){
        return $this->belongsTo('App\Domain\Entities\identitas','id_identitas');
    }



}