<?php

namespace DraperStudio\Database\Schema;

use Illuminate\Database\Schema\Builder as BaseBuilder;
use DraperStudio\Database\Traits\Schema\BuilderTrait;

class SQLiteBuilder extends BaseBuilder
{
    use BuilderTrait;
}
