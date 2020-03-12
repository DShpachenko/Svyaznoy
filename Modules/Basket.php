<?php

namespace Modules\Basket;

use Contracts\Basket\BasketContract;
use Traits\Basket\Create;
use Traits\Basket\Update;
use Traits\Basket\Delete;

/**
 * Class Basket
 * @package Modules\Basket
 */
class Basket implements BasketContract
{
    use Create;
    use Update;
    use Delete;
}