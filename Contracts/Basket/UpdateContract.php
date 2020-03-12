<?php

namespace Contracts\Basket;

/**
 * Interface UpdateContract
 * @package Contracts\Basket
 */
interface UpdateContract
{
    /**
     * @param $object
     * @return mixed
     */
    public function update($object);
}