<?php

namespace Contracts\Basket;

/**
 * Interface CreateContract
 * @package Contracts\Basket
 */
interface CreateContract
{
    /**
     * @param $object
     * @return mixed
     */
    public function create($object);
}