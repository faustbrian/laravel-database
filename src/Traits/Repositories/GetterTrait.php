<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Repositories\Criteria\OrderBy;

trait GetterTrait
{
    public function getFirst($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->first($columns);

        $this->makeModel();

        return $model;
    }

    public function getLast($columns = ['*'])
    {
        $this->applyCriteria();

        $model = $this->getModel()->orderBy('created_at', 'desc')->first($columns);

        $this->makeModel();

        return $model;
    }
}
