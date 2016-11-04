<?php

namespace BrianFaust\Database\Traits\Repositories\Decorators\Cache;

trait RequireTrait
{
    public function requireBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey([$column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    public function requireById($id, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['id', $id, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireById($id, $columns);

        return $this->put($key, $records);
    }
}
