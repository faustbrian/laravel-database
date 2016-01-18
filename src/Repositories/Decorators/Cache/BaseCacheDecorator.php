<?php

namespace DraperStudio\Database\Repositories\Decorators\Cache;

use DraperStudio\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use DraperStudio\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use DraperStudio\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use DraperStudio\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use DraperStudio\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\AggregateTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\BuilderTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\CollectionTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\CriteriaTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\CrudlTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\ExceptionTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\FindTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\RelationshipTrait;
use DraperStudio\Database\Traits\Repositories\Decorators\Cache\RequireTrait;

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
