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

namespace BrianFaust\Database\Behaviours\Hashid;

use Illuminate\Database\Eloquent\Model;

class HashidObserver
{
    public function creating(Model $model)
    {
        $model->generateHashid();
    }

    public function created(Model $model)
    {
        if ($model->hashidStrategy() == 'id') {
            $model->generateHashidFromId();
            $model->save();
        }
    }
}
