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

namespace BrianFaust\Database\Schema;

use BrianFaust\Database\Traits\Schema\BuilderTrait;
use Illuminate\Database\Schema\Builder as BaseBuilder;

class SQLiteBuilder extends BaseBuilder
{
    use BuilderTrait;
}
