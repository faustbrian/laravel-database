<?php



declare(strict_types=1);



namespace BrianFaust\Database\Migrations;

use BrianFaust\Database\Schema\Blueprint;

abstract class Migration
{
    protected $connection;

    protected $schema;

    public function __construct()
    {
        $this->schema = \DB::getSchemaBuilder();

        $this->schema->blueprintResolver(function ($table, $callback) {
            return new Blueprint($table, $callback);
        });
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
