<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class OnlyTrashed extends Criterion
{
    public function apply(Model $model, Repository $repository)
    {
        return $model->onlyTrashed();
    }
}
