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

namespace Artisanry\Database\Models;

use Artisanry\Database\Contracts\Models\Traits\ScopesTrait as ScopesContract;
use Artisanry\Database\Traits\Models\ScopesTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent implements ScopesContract
{
    use ScopesTrait;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
