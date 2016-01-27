<?php

namespace App\Domain\Contract;

interface Repository
{
    public function all();
    public function getManyBy($key, $value);
    public function getFirstBy($key, $value);
    public function instance(array $attributes = []);

}