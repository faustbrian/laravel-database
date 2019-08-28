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

class OrderBy extends Criterion
{
    private $column;

    private $direction;

    public function __construct($column, $direction = 'asc')
    {
        $this->column = $column;
        $this->direction = $direction;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->orderBy($this->column, $this->direction);
    }
}
