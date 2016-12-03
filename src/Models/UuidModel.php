<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Models;

use BrianFaust\Database\Behaviours\Uuid\UuidModel as UuidTrait;

abstract class UuidModel extends Model
{
    use UuidTrait;

    public $incrementing = false;
}
