<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories\Decorators\Cache;

trait CollectionTrait
{
    public function lists($value, $key = null)
    {
        $key = $this->buildCacheKey(['lists', $value, $key]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->lists($value, $key);

        return $this->put($key, $records);
    }

    public function all($columns = ['*'])
    {
        $key = $this->buildCacheKey(['all', $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->all($columns);

        return $this->put($key, $records);
    }

    public function paginate($perPage = 10, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['paginate', $perPage, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->paginate($perPage, $columns);

        return $this->put($key, $records);
    }

    public function simplePaginate($perPage = 10, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['simplePaginate', $perPage, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->simplePaginate($perPage, $columns);

        return $this->put($key, $records);
    }

    public function listBy($key, $value)
    {
        $key = $this->buildCacheKey(['listBy', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->listBy($key, $value);

        return $this->put($key, $records);
    }
}
