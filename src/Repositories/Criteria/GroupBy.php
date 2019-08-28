<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Repositories\Criteria;

use Artisanry\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class GroupBy extends Criterion
{
    private $column;

    public function __construct($column)
    {
        $this->column = $column;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->groupBy($this->column);
    }
}
