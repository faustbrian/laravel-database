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

namespace Artisanry\Database\Schema;

use Artisanry\Database\Traits\Schema\BuilderTrait;
use Illuminate\Database\Schema\Builder as BaseBuilder;

class SqlServerBuilder extends BaseBuilder
{
    use BuilderTrait;
}
