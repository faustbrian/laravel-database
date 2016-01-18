<?php

namespace DraperStudio\Database\Models;

use DraperStudio\Database\Behaviours\Hashid\HashidModel as HashidTrait;

abstract class HashidModel extends Model
{
    use HashidTrait;

    public $incrementing = false;
}
