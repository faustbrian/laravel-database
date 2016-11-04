<?php

namespace BrianFaust\Database\Schema;

use Illuminate\Database\Schema\Builder as BaseBuilder;
use BrianFaust\Database\Traits\Schema\BuilderTrait;

class PostgresBuilder extends BaseBuilder
{
    use BuilderTrait;
}
