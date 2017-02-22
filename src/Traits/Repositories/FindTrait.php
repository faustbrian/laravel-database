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

use BrianFaust\Database\Repositories\Criteria\OrderBy;
use BrianFaust\Database\Repositories\Criteria\WithTrashed;
use Illuminate\Database\Eloquent\Model;

trait FindTrait
{
    public function find($id, $columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->find($id, $columns);

        $this->makeModel();

        return $model;
    }

    public function findBy($column, $value, $columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->where($column, '=', $value)->first($columns);

        $this->makeModel();

        return $model;
    }

    public function findManyBy($column, $value, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->where($column, '=', $value)->get($columns);

        $this->makeModel();

        return $collection;
    }

    public function findWhere($where, $columns = ['*'], $or = false)
    {
        $this->applyCriteria();

        $model = $this->getModel();

        foreach ($where as $field => $value) {
            if ($value instanceof \Closure) {
                $model = (!$or)
                    ? $model->where($value)
                    : $model->orWhere($value);
            } elseif (is_array($value)) {
                if (count($value) === 3) {
                    list($field, $operator, $search) = $value;

                    $model = (!$or)
                        ? $model->where($field, $operator, $search)
                        : $model->orWhere($field, $operator, $search);
                } elseif (count($value) === 2) {
                    list($field, $search) = $value;

                    $model = (!$or)
                        ? $model->where($field, '=', $search)
                        : $model->orWhere($field, '=', $search);
                }
            } else {
                $model = (!$or)
                    ? $model->where($field, '=', $value)
                    : $model->orWhere($field, '=', $value);
            }
        }

        $collection = $model->get($columns);

        $this->makeModel();

        return $collection;
    }

    public function findWhereBetween($column, array $values, $boolean = 'and', $not = false)
    {
        $this->applyCriteria();

        $collection = $this->getModel()->whereBetween($column, $values, $boolean, $not)->get();

        $this->makeModel();

        return $collection;
    }

    public function findFirstBy($column, $value, $columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->where($column, '=', $value)->first($columns);

        $this->makeModel();

        return $model;
    }

    public function findLastBy($column, $value, $columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->where($column, '=', $value)
                    ->orderBy('created_at', 'desc')
                    ->first($columns);

        $this->makeModel();

        return $model;
    }

    public function findNext(Model $model)
    {
        $this->applyCriteria();

        $next = $this->getModel()
                     ->where('created_at', '>=', $model->created_at)
                     ->where('id', '<>', $model->id)
                     ->orderBy('created_at', 'asc')
                     ->first();

        $this->makeModel();

        return $next;
    }

    public function findPrevious(Model $model)
    {
        $this->applyCriteria();

        $prev = $this->getModel()
                     ->where('created_at', '<=', $model->created_at)
                     ->where('id', '<>', $model->id)
                     ->orderBy('created_at', 'desc')
                     ->first();

        $this->makeModel();

        return $next;
    }

    public function findRecentlyCreated($perPage = 10, $columns = ['*'])
    {
        $this->pushCriteria(new OrderBy('created_at', 'desc'));

        return $this->paginate($perPage, $columns);
    }

    public function findRecentlyUpdated($perPage = 10, $columns = ['*'])
    {
        $this->pushCriteria(new OrderBy('updated_at', 'desc'));

        return $this->paginate($perPage, $columns);
    }

    public function findRecentlyDeleted($perPage = 10, $columns = ['*'])
    {
        $this->pushCriteria(new WithTrashed());
        $this->pushCriteria(new OrderBy('deleted_at', 'desc'));

        return $this->paginate($perPage, $columns);
    }
}
