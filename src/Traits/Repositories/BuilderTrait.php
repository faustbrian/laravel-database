<?php


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

use BrianFaust\Database\Repositories\Criteria\WithRelations;
use BrianFaust\Database\Repositories\Criteria\WithLazyRelations;

trait BuilderTrait
{
    public function getNew(array $attributes = [])
    {
        return $this->getModel()->newInstance($attributes);
    }

    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithRelations($relations));

        return $this;
    }

    public function withLazy($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        $this->pushCriteria(new WithLazyRelations($relations));

        return $this;
    }
}
