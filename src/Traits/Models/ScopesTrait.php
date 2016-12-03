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

namespace BrianFaust\Database\Traits\Models;

use Illuminate\Database\Eloquent\Builder;

trait ScopesTrait
{
    public function scopeWhereLike(Builder $builder, $field, $value)
    {
        return $builder->where($field, 'like', "%$value%");
    }

    public function scopeOrWhereLike(Builder $builder, $field, $value)
    {
        return $builder->orWhere($field, 'like', "%$value%");
    }

    public function scopeWhereIlike(Builder $builder, $field, $value)
    {
        return $builder->where($field, 'ilike', "%$value%");
    }

    public function scopeOrWhereIlike(Builder $builder, $field, $value)
    {
        return $builder->orWhere($field, 'ilike', "%$value%");
    }
}
