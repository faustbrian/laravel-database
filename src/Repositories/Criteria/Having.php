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

namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class Having extends Criterion
{
    private $column;

    private $operator;

    private $value;

    private $boolean;

    public function __construct($column, $operator = null, $value = null, $boolean = 'and')
    {
        $this->column = $column;
        $this->operator = $operator;
        $this->value = $value;
        $this->boolean = $boolean;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->having($this->column, $this->operator, $this->value, $this->boolean);
    }
}
