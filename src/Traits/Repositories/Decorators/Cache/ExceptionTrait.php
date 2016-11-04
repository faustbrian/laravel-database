<?php

namespace BrianFaust\Database\Traits\Repositories\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    public function modelNotFound(Model $model)
    {
        return $this->repository->modelNotFound($model);
    }
}
