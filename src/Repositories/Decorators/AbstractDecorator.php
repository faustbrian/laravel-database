<?php

namespace BrianFaust\Database\Repositories\Decorators;

use BrianFaust\Database\Contracts\Repositories\Repository;

abstract class AbstractDecorator
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}
