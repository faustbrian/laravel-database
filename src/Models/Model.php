<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Models;

use BrianFaust\Database\Contracts\Models\Traits\ScopesTrait as ScopesContract;
use BrianFaust\Database\Traits\Models\ScopesTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent implements ScopesContract
{
    use ScopesTrait;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
