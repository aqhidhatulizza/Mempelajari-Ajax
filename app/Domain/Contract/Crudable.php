<?php

namespace App\Domain\Contract;

/**
 * Interface Crudable
 *
 * @package app\Domain\Contract
 */
interface  Crudable
{
    /**
     * @param $id
     * @param array $column
     *
     * @return mixed
     */
    public function find($id,array $column = []);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     *
     * @param mixed
     */
    public function update($id,array $data);
    /**
     * @param $id
     *
     * @return mixed
     */

    public function delete($id);

}