<?php

namespace Traits\Basket;

trait Create
{
    public function create($data) {
        return $data + 1;
    }
}