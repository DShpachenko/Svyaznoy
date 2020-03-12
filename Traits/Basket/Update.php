<?php

namespace Traits\Basket;

trait Update
{
    public function update($data) {
        return $data + 1;
    }
}