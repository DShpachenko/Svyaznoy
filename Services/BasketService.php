<?php

namespace Services;

use Contracts\Basket\BasketContract;

class BasketService
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function create(BasketContract $obj)
    {
        return $obj->create($this->data);
    }

    public function update(BasketContract $obj)
    {
        return $obj->update($this->data);
    }
}