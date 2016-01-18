<?php

namespace DraperStudio\Database\Repositories\Criteria;

use DraperStudio\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class Skip extends Criterion
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->skip($this->value);
    }
}
