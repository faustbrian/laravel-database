<?php

namespace BrianFaust\Database\Traits\Repositories;

use Illuminate\Database\Eloquent\Model;

trait RelationshipTrait
{
    public function saveRelation($modelOrId, $relation, Model $relationModel, array $joining = [], $touch = true)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->save($relationModel, $joining, $touch);
    }

    public function saveRelations($modelOrId, $relation, array $models, array $joinings = [])
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->saveMany($models, $joinings);
    }

    public function associateRelation($modelOrId, $relation, Model $relationModel)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->associate($relationModel);
    }

    public function attachRelation($modelOrId, $relation, $relationId, array $attributes = [], $touch = true)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->attach($relationId, $attributes, $touch);
    }

    public function detachRelation($modelOrId, $relation, $ids = [], $touch = true)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->detach($ids, $touch);
    }

    public function syncRelation($modelOrId, $relation, $ids, $detaching = true)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->sync($ids, $detaching);
    }

    public function updateExistingPivot($modelOrId, $relation, $relationId, array $attributes, $touch = true)
    {
        if (!$modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->updateExistingPivot($relationId, $attributes, $touch);
    }

    public function getRelation(Model $model, $relation)
    {
        return $model->{$relation};
    }

    public function getRelationPaginated(Model $model, $relation, $perPage = 10, $orderBy = 'created_at', $orderByDirection = 'desc')
    {
        return $model->{$relation}()->orderBy($orderBy, $orderByDirection)->paginate($perPage);
    }
}
