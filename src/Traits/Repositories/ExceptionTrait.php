<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Exceptions\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    public function modelNotFound(Model $model)
    {
        throw (new ModelNotFoundException())->setModel(get_class($model));
    }
}
