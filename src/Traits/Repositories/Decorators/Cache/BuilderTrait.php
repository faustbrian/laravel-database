<?php

namespace DraperStudio\Database\Traits\Repositories\Decorators\Cache;

trait BuilderTrait
{
    public function getNew(array $attributes = [])
    {
        return $this->repository->getNew($attributes);
    }

    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->with($relations);
    }

    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        return $this->repository->withLazy($relations);
    }
}
