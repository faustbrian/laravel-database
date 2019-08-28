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

namespace Artisanry\Database\Behaviours\Slug;

use Illuminate\Database\Eloquent\Model;

class SlugObserver
{
    public function creating(Model $model)
    {
        $model->generateSlug();
    }

    public function created(Model $model)
    {
        if ($model->slugStrategy() == 'id') {
            $model->generateSlugFromId();
            $model->save();
        }
    }
}
