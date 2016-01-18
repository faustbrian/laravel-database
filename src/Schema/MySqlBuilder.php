<?php

namespace DraperStudio\Database\Schema;

use Illuminate\Database\Schema\MySqlBuilder as BaseBuilder;
use DraperStudio\Database\Traits\Schema\BuilderTrait;

class MySqlBuilder extends BaseBuilder
{
    use BuilderTrait;
}
