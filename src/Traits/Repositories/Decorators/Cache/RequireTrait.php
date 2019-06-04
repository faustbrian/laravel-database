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

trait RequireTrait
{
    public function requireBy($column, $value, $columns = ['*'])
    {
        $key = $this->buildCacheKey([$column, $value, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireBy($column, $value, $columns);

        return $this->put($key, $records);
    }

    public function requireById($id, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['id', $id, $columns]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireById($id, $columns);

        return $this->put($key, $records);
    }
}
