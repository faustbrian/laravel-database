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

namespace Artisanry\Database\Traits\Repositories\Decorators\Cache;

use Illuminate\Database\Eloquent\Model;

trait RelationshipTrait
{
    public function getRelation(Model $model, $relation)
    {
        $key = $this->buildCacheKey(['getRelation', $model->id, get_class($model), $relation]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->getRelation($model, $relation);

        return $this->put($key, $records);
    }
}
