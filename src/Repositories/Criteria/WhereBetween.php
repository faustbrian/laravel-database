<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class WhereBetween extends Criterion
{
    private $column;

    private $values;

    public function __construct($column, array $values)
    {
        $this->column = $column;
        $this->values = $values;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->whereBetween($this->column, $this->values);
    }
}
