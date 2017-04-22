<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
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
