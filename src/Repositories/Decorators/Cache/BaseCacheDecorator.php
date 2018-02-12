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

namespace BrianFaust\Database\Repositories\Decorators\Cache;

use BrianFaust\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use BrianFaust\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use BrianFaust\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use BrianFaust\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use BrianFaust\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\AggregateTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\BuilderTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\CollectionTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\CriteriaTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\CrudlTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\ExceptionTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\FindTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\RelationshipTrait;
use BrianFaust\Database\Traits\Repositories\Decorators\Cache\RequireTrait;

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
