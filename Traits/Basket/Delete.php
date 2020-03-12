<?php

namespace Traits\Basket;

trait Delete
{
    public function delete($data) {
        return $data + 1;
    }
}