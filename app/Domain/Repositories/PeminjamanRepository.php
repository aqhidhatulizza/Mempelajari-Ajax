<?php
/**
 * Created by PhpStorm.
 * User: M Rosyidin Attoriq
 * Date: 26/01/2016
 * Time: 16:08
 */

namespace App\Domain\Repositories;


use App\Domain\Contract\Crudable;
use App\Domain\Entities\Identitas;
use App\Domain\Contract\Paginable;
use App\Domain\Entities\peminjaman;

class PeminjamanRepository extends AbstractRepository implements Paginable, Crudable
{
    public function __construct(peminjaman $peminjaman)
    {
        $this->model = $peminjaman;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        return parent::create([
                'id_buku' => e($data['id_buku']),
                'id_identitas' => e($data['id_identitas']),
                'lama_hari' => e($data['lama_hari']),
                'tanggal_pinjam' => e($data['tanggal_pinjam']),
                'tanggal_kembali' => e($data['tanggal_kembali']),
            ]
        );


    }

    public function update($id, array $data)
    {
        return parent::update($id, [
                'tanggal_pinjam' => e($data['tanggal_pinjam']),
                'tanggal_kembali' => e($data['tanggal_kembali']),

            ]
        );


    }

    public function delete($id)
    {
        return parent::delete($id);

        //  return redirect('/peminjaman');
    }

    public function search($query)
    {
        return parent::likeSearch('name', $query);
    }

    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }

    public function getData()
    {
        $data = $this->model->get();
        return $data;
    }
}