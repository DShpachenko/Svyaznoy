<?php

namespace Http\Controllers;

use Http\Requests\Basket\{CreateRequest, UpdateRequest, DeleteRequest};
use Modules\Basket\Basket;
use Services\BasketService;
use Http\Resources\Success;
use Http\Resources\Failed;

/**
 * Class BasketController
 * @package Http\Controllers
 */
class BasketController
{
    /**
     * @var BasketService
     */
    protected $basketService;

    /**
     * BasketController constructor.
     * @param BasketService $basketService
     */
    public function __construct(BasketService $basketService)
    {
        $this->basketService = $basketService;
    }

    public function create(CreateRequest $request)
    {
        $data = new Basket($request);

        if ($result = $this->basketService->create($data)) {
            return new Success('OK');
        }

        return new Failed($result);
    }

    public function update(UpdateRequest $request)
    {
        $data = new Basket($request);

        if ($result = $this->basketService->update($data)) {
            return new Success('OK');
        }

        return new Failed($result);
    }

    public function delete(DeleteRequest $request)
    {
        $data = new Basket($request);

        if ($result = $this->basketService->delete($data)) {
            return new Success('OK');
        }

        return new Failed($result);
    }
}