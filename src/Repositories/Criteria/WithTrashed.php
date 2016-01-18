<?php

namespace DraperStudio\Database\Repositories\Criteria;

use DraperStudio\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class WithTrashed extends Criterion
{
    public function apply(Model $model, Repository $repository)
    {
        return $model->withTrashed();
    }
}
