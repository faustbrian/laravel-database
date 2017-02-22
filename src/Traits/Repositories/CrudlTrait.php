<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;

trait CrudlTrait
{
    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function saveModel(array $data)
    {
        foreach ($data as $key => $value) {
            $this->getModel()->$key = $value;
        }

        $model = $this->getModel()->save();

        $this->makeModel();

        return $model;
    }

    public function update($id, array $data, $column = 'id')
    {
        $model = $this->requireBy($column, $id);

        return $this->updateModel($model, $data);
    }

    public function updateFill($id, array $data, $column = 'id')
    {
        $model = $this->requireBy($column, $id);

        if (!$model = $model->fill($data)->save()) {
            throw new RepositoryException('Could not be saved');
        }

        $this->makeModel();

        return $model;
    }

    public function updateModel(Model $model, array $data)
    {
        if (!$model->update($data)) {
            throw new RepositoryException('Could not be saved');
        }

        $this->makeModel();

        return $model;
    }

    public function delete($ids)
    {
        return $this->getModel()->destroy($ids);
    }

    public function truncate()
    {
        return $this->getModel()->delete();
    }

    public function firstOrCreate(array $attributes)
    {
        return $this->getModel()->firstOrCreate($attributes);
    }

    public function firstOrNew(array $attributes)
    {
        return $this->getModel()->firstOrNew($attributes);
    }

    public function has($relation, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->has($relation)->get($columns);

        $this->makeModel();

        return $collection;
    }

    public function saveHasOneOrMany(Model $model, $relationship, array $attributes)
    {
        $relationshipModel = get_class($model->{$relationship}()->getModel());
        $relationshipModel = new $relationshipModel($attributes);

        return $model->{$relationship}()->save($relationshipModel);
    }
}
