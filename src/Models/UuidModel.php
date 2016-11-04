<?php

namespace BrianFaust\Database\Models;

use BrianFaust\Database\Behaviours\Uuid\UuidModel as UuidTrait;

abstract class UuidModel extends Model
{
    use UuidTrait;

    public $incrementing = false;
}
