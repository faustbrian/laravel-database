<?php

namespace DraperStudio\Database\Models;

use DraperStudio\Database\Behaviours\Uuid\UuidModel as UuidTrait;

abstract class UuidModel extends Model
{
    use UuidTrait;

    public $incrementing = false;
}
