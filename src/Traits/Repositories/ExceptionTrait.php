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

namespace Artisanry\Database\Traits\Repositories;

use Artisanry\Database\Exceptions\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

trait ExceptionTrait
{
    public function modelNotFound(Model $model)
    {
        throw (new ModelNotFoundException())->setModel(get_class($model));
    }
}
