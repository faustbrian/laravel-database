<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

interface FindTrait
{
    public function find($id, $columns = ['*']);

    public function findBy($column, $value, $columns = ['*']);

    public function findManyBy($column, $value, $columns = ['*']);

    public function findWhere($where, $columns = ['*'], $or = false);

    public function findWhereBetween($column, array $values, $boolean = 'and', $not = false);

    public function findFirstBy($column, $value, $columns = ['*']);

    public function findLastBy($column, $value, $columns = ['*']);

    public function findNext(Model $model);

    public function findPrevious(Model $model);

    public function findRecentlyCreated($perPage = 10, $columns = ['*']);

    public function findRecentlyUpdated($perPage = 10, $columns = ['*']);

    public function findRecentlyDeleted($perPage = 10, $columns = ['*']);
}
