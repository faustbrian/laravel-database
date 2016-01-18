<?php

namespace DraperStudio\Database\Traits\Repositories\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait RelationshipTrait
{
    public function getRelation(Model $model, $relation)
    {
        $key = $this->buildCacheKey(['getRelation', $model->id, get_class($model), $relation]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->getRelation($model, $relation);

        return $this->put($key, $records);
    }
}
