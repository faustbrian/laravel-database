<?php

namespace DraperStudio\Database\Schema;

use DraperStudio\Database\Traits\Schema\RelationsTrait;
use DraperStudio\Database\Traits\Schema\TypesTrait;
use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    use RelationsTrait;
    use TypesTrait;
}
