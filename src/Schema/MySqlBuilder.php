<?php



declare(strict_types=1);



namespace BrianFaust\Database\Schema;

use BrianFaust\Database\Traits\Schema\BuilderTrait;
use Illuminate\Database\Schema\MySqlBuilder as BaseBuilder;

class MySqlBuilder extends BaseBuilder
{
    use BuilderTrait;
}
