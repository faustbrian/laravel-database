<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Contracts\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

interface ScopesTrait
{
    public function scopeWhereLike(Builder $builder, $field, $value);

    public function scopeOrWhereLike(Builder $builder, $field, $value);

    public function scopeWhereIlike(Builder $builder, $field, $value);

    public function scopeOrWhereIlike(Builder $builder, $field, $value);
}
