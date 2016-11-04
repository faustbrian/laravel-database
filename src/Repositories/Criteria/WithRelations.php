<?php

namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class WithRelations extends Criterion
{
    private $relations;

    public function __construct($relations)
    {
        $this->relations = $relations;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->with($this->relations);
    }
}
