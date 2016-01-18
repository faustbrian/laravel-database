<?php

namespace DraperStudio\Database\Repositories\Decorators;

use DraperStudio\Database\Contracts\Repositories\Repository;

abstract class AbstractDecorator
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}
