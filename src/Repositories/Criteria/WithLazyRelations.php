<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class WithLazyRelations extends Criterion
{
    private $relations;

    public function __construct($relations)
    {
        $this->relations = $relations;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->load($this->relations);
    }
}
