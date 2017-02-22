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

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories;

trait CollectionTrait
{
    public function lists($value, $key = null)
    {
        return $this->getModel()->lists($value, $key);
    }

    public function all($columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->get($columns);

        $this->makeModel();

        return $collection;
    }

    public function paginate($perPage = 10, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->paginate($perPage, $columns);

        $this->makeModel();

        return $collection;
    }

    public function simplePaginate($perPage = 10, $columns = ['*'])
    {
        $this->applyCriteria();

        $collection = $this->getModel()->simplePaginate($perPage, $columns);

        $this->makeModel();

        return $collection;
    }

    public function listBy($key, $value)
    {
        return $this->get([
            $key, explode('.', $value)[0],
        ])->keyBy($key)->map(function ($item, $key) use ($value) {
            return array_get($item->toArray(), $value);
        });
    }
}
