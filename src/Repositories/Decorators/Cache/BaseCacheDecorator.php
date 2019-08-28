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

namespace Artisanry\Database\Repositories\Decorators\Cache;

use Artisanry\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use Artisanry\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use Artisanry\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use Artisanry\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use Artisanry\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use Artisanry\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use Artisanry\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use Artisanry\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\AggregateTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\BuilderTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\CollectionTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\CriteriaTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\CrudlTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\ExceptionTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\FindTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\RelationshipTrait;
use Artisanry\Database\Traits\Repositories\Decorators\Cache\RequireTrait;

class BaseCacheDecorator extends AbstractCacheDecorator implements
AggregateContract,
                                                                   BuilderContract,
                                                                   CollectionContract,
                                                                   CriteriaContract,
                                                                   CrudlContract,
                                                                   ExceptionContract,
                                                                   FindContract,
                                                                   RequireContract
{
    use AggregateTrait;
    use BuilderTrait;
    use CollectionTrait;
    use CriteriaTrait;
    use CrudlTrait;
    use ExceptionTrait;
    use FindTrait;
    use RelationshipTrait;
    use RequireTrait;
}
