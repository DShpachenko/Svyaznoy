<?php

namespace Traits;

/**
 * Trait Relation
 * @package Traits
 */
trait Relation
{
    /**
     * @var array
     */
    public $relations = [];

    /**
     * @param null $relations
     */
    public function setRelations($relations = null)
    {
        $this->relations = $relations;
    }
}