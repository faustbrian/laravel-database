<?php

namespace BrianFaust\Database\Schema;

use Illuminate\Database\Schema\Builder as BaseBuilder;
use BrianFaust\Database\Traits\Schema\BuilderTrait;

class SqlServerBuilder extends BaseBuilder
{
    use BuilderTrait;
}
