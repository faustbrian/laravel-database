<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class Having extends Criterion
{
    private $column;

    private $operator;

    private $value;

    private $boolean;

    public function __construct($column, $operator = null, $value = null, $boolean = 'and')
    {
        $this->column = $column;
        $this->operator = $operator;
        $this->value = $value;
        $this->boolean = $boolean;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->having($this->column, $this->operator, $this->value, $this->boolean);
    }
}
