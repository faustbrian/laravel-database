<?php

namespace DraperStudio\Database\Repositories;

use DraperStudio\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use DraperStudio\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use DraperStudio\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use DraperStudio\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use DraperStudio\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use DraperStudio\Database\Contracts\Repositories\Traits\GetterTrait as GetterContract;
use DraperStudio\Database\Contracts\Repositories\Traits\RelationshipTrait as RelationshipContract;
use DraperStudio\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use DraperStudio\Database\Traits\Repositories\AggregateTrait;
use DraperStudio\Database\Traits\Repositories\BuilderTrait;
use DraperStudio\Database\Traits\Repositories\CollectionTrait;
use DraperStudio\Database\Traits\Repositories\CriteriaTrait;
use DraperStudio\Database\Traits\Repositories\CrudlTrait;
use DraperStudio\Database\Traits\Repositories\ExceptionTrait;
use DraperStudio\Database\Traits\Repositories\FindTrait;
use DraperStudio\Database\Traits\Repositories\GetterTrait;
use DraperStudio\Database\Traits\Repositories\RelationshipTrait;
use DraperStudio\Database\Traits\Repositories\RequireTrait;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

class BaseRepository extends AbstractRepository implements AggregateContract,
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
