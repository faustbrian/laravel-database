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

namespace Artisanry\Database\Repositories;

use Artisanry\Database\Contracts\Repositories\Traits\AggregateTrait as AggregateContract;
use Artisanry\Database\Contracts\Repositories\Traits\BuilderTrait as BuilderContract;
use Artisanry\Database\Contracts\Repositories\Traits\CollectionTrait as CollectionContract;
use Artisanry\Database\Contracts\Repositories\Traits\CriteriaTrait as CriteriaContract;
use Artisanry\Database\Contracts\Repositories\Traits\CrudlTrait as CrudlContract;
use Artisanry\Database\Contracts\Repositories\Traits\ExceptionTrait as ExceptionContract;
use Artisanry\Database\Contracts\Repositories\Traits\FindTrait as FindContract;
use Artisanry\Database\Contracts\Repositories\Traits\GetterTrait as GetterContract;
use Artisanry\Database\Contracts\Repositories\Traits\RelationshipTrait as RelationshipContract;
use Artisanry\Database\Contracts\Repositories\Traits\RequireTrait as RequireContract;
use Artisanry\Database\Traits\Repositories\AggregateTrait;
use Artisanry\Database\Traits\Repositories\BuilderTrait;
use Artisanry\Database\Traits\Repositories\CollectionTrait;
use Artisanry\Database\Traits\Repositories\CriteriaTrait;
use Artisanry\Database\Traits\Repositories\CrudlTrait;
use Artisanry\Database\Traits\Repositories\ExceptionTrait;
use Artisanry\Database\Traits\Repositories\FindTrait;
use Artisanry\Database\Traits\Repositories\GetterTrait;
use Artisanry\Database\Traits\Repositories\RelationshipTrait;
use Artisanry\Database\Traits\Repositories\RequireTrait;
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
    }
}
