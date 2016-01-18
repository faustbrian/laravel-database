<?php

namespace DraperStudio\Database\Repositories\Criteria;

use DraperStudio\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

abstract class Criterion
{
    abstract public function apply(Model $model, Repository $repository);
}
