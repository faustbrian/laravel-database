<?php

namespace BrianFaust\Database\Schema;

use Illuminate\Database\Schema\MySqlBuilder as BaseBuilder;
use BrianFaust\Database\Traits\Schema\BuilderTrait;

class MySqlBuilder extends BaseBuilder
{
    use BuilderTrait;
}
