<?php



namespace DraperStudio\Database\Repositories\Criteria;

use DraperStudio\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;


class WhereBetween extends Criterion
{

    private $column;


    private $column;


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
