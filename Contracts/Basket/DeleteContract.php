<?php

namespace Contracts\Basket;

/**
 * Interface DeleteContract
 * @package Contracts\Basket
 */
interface DeleteContract
{
    /**
     * @param $object
     * @return mixed
     */
    public function delete($object);
}