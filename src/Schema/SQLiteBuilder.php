<?php



declare(strict_types=1);



namespace BrianFaust\Database\Schema;

use BrianFaust\Database\Traits\Schema\BuilderTrait;
use Illuminate\Database\Schema\Builder as BaseBuilder;

class SQLiteBuilder extends BaseBuilder
{
    use BuilderTrait;
}
