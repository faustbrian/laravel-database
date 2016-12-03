<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class HavingRaw extends Criterion
{
    private $sql;

    private $bindings;

    private $boolean;

    public function __construct($sql, array $bindings = [], $boolean = 'and')
    {
        $this->sql = $sql;
        $this->bindings = $bindings;
        $this->boolean = $boolean;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->havingRaw($this->sql, $this->bindings, $this->boolean);
    }
}
