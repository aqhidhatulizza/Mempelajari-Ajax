<?php
/**
 * Created by PhpStorm.
 * User: M Rosyidin Attoriq
 * Date: 26/01/2016
 * Time: 16:08
 */

namespace App\Domain\Repositories;


use App\Domain\Contract\Crudable;
use App\Domain\Entities\buku;
use App\Domain\Contract\Paginable;

class bukuRepository extends AbstractRepository implements Paginable, Crudable
{
    public function __construct(buku $buku)
    {
        $this->model = $buku;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        return parent::create([
                'nama_buku' => e($data['nama_buku']),
                'jenis_buku' => e($data['jenis_buku']),
                'harga_buku' => e($data['harga_buku']),

            ]
        );

     //   return redirect('/buku');
    }

    public function update($id, array $data)
    {

        return parent::update($id, [
                'nama_buku' => e($data['nama_buku']),
                'jenis_buku' => e($data['jenis_buku']),
                'harga_buku' => e($data['harga_buku']),
            ]
        );

       // return redirect('/buku');

    }

    public function delete($id)
    {
        return parent::delete($id);

     //   return redirect('/buku');
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