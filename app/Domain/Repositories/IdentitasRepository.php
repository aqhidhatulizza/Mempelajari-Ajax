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

class IdentitasRepository extends AbstractRepository implements Paginable, Crudable
{
    public function __construct(identitas $identitas)
    {
        $this->model = $identitas;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
    return    parent::create([
                'nama' => e($data['nama']),
                'alamat' => e($data['alamat']),
                'tanggal_masuk' => e($data['tanggal_masuk']),
                'jenis_kelamin' => e($data['jenis_kelamin']),
                'user_id' => e($data['user_id']),
            ]
        );


    }

    public function update($id, array $data)
    {
    return    parent::update($id, [
                'nama' => e($data['nama']),
                'alamat' => e($data['alamat']),
                'tanggal_masuk' => e($data['tanggal_masuk']),
                'jenis_kelamin' => e($data['jenis_kelamin']),
                'user_id' => e($data['user_id']),
            ]
        );



    }

    public function delete($id)
    {
      return parent::delete($id);

      //  return redirect('/identitas');
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