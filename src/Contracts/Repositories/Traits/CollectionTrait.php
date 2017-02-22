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

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface CollectionTrait
{
    public function lists($value, $key = null);

    public function all($columns = ['*']);

    public function paginate($perPage = 10, $columns = ['*']);

    public function simplePaginate($perPage = 10, $columns = ['*']);

    public function listBy($key, $value);
}
