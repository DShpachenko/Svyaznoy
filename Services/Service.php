<?php

namespace Services;

/**
 * Class Service
 * @package Services
 */
abstract class Service
{
    /**
     * Repository object.
     */
    public $repository;

    /**
     * @param array $input
     * @return mixed
     */
    public function create(array $input)
    {
        return $this->repository->create($input);
    }

    /**
     * @param $id
     * @param array $input
     * @return mixed
     */
    public function update($id, array $input)
    {
        return $this->repository->update($id, $input);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}