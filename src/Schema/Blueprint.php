<?php

namespace BrianFaust\Database\Schema;

use BrianFaust\Database\Traits\Schema\RelationsTrait;
use BrianFaust\Database\Traits\Schema\TypesTrait;
use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    use RelationsTrait;
    use TypesTrait;
}
