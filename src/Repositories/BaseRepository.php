<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Repositories;

use BrianFaust\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use BrianFaust\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use BrianFaust\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use BrianFaust\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use BrianFaust\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use BrianFaust\Database\Contracts\Repositories\Traits\GetterTrait as GetterContract;
use BrianFaust\Database\Contracts\Repositories\Traits\RelationshipTrait as RelationshipContract;
use BrianFaust\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use BrianFaust\Database\Traits\Repositories\AggregateTrait;
use BrianFaust\Database\Traits\Repositories\BuilderTrait;
use BrianFaust\Database\Traits\Repositories\CollectionTrait;
use BrianFaust\Database\Traits\Repositories\CriteriaTrait;
use BrianFaust\Database\Traits\Repositories\CrudlTrait;
use BrianFaust\Database\Traits\Repositories\ExceptionTrait;
use BrianFaust\Database\Traits\Repositories\FindTrait;
use BrianFaust\Database\Traits\Repositories\GetterTrait;
use BrianFaust\Database\Traits\Repositories\RelationshipTrait;
use BrianFaust\Database\Traits\Repositories\RequireTrait;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

class BaseRepository extends AbstractRepository implements
AggregateContract,
                                                           BuilderContract,
                                                           CollectionContract,
                                                           CriteriaContract,
                                                           CrudlContract,
                                                           ExceptionContract,
                                                           FindContract,
                                                           GetterContract,
                                                           RelationshipContract,
                                                           RequireContract
{
    use AggregateTrait;
    use BuilderTrait;
    use CollectionTrait;
    use CriteriaTrait;
    use CrudlTrait;
    use ExceptionTrait;
    use FindTrait;
    use GetterTrait;
    use RelationshipTrait;
    use RequireTrait;

    public function __construct(Container $app)
    {
        $this->criteria = new Collection();
        $this->resetScope();

        parent::__construct($app);
    }

    public function getModelClass()
    {
        //
    }
}
