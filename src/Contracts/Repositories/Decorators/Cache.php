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

namespace BrianFaust\Database\Contracts\Repositories\Decorators;

interface Cache
{
    public function get($key);

    public function put($key, $value, $minutes = null);

    public function has($key);

    public function increment($key, $value = 1);

    public function decrement($key, $value = 1);

    public function forever($key, $value);

    public function forget($key);

    public function flush();

    public function cacheTags();
}
