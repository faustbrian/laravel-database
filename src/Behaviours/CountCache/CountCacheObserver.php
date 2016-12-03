<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Behaviours\CountCache;

use Illuminate\Database\Eloquent\Model;

class CountCacheObserver
{
    private $manager;

    public function created(Model $model)
    {
        $this->manager()->increment($model);
    }

    public function updated(Model $model)
    {
        $this->manager()->updateCache($model);
    }

    public function deleted(Model $model)
    {
        $this->manager()->decrement($model);
    }

    public function restored(Model $model)
    {
        $this->manager()->increment($model);
    }

    protected function manager()
    {
        if (!$this->manager) {
            $this->manager = new CountCacheManager();
        }

        return $this->manager;
    }

    public function setManager(CountCacheManager $manager)
    {
        $this->manager = $manager;
    }
}
