<?php

namespace DraperStudio\Database\Repositories\Criteria;

use DraperStudio\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class GroupBy extends Criterion
{
    private $column;

    public function __construct($column)
    {
        $this->column = $column;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->groupBy($this->column);
    }
}
