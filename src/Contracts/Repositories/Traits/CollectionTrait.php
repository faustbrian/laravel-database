<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface CollectionTrait
{
    public function lists($value, $key = null);

    public function all($columns = ['*']);

    public function paginate($perPage = 10, $columns = ['*']);

    public function simplePaginate($perPage = 10, $columns = ['*']);

    public function listBy($key, $value);
}
