<?php

namespace App\Domain\Contract;

interface Paginable

{
    public function getByPage($limit =10);
}
