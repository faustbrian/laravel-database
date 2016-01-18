<?php

namespace DraperStudio\Database\Migrations;

use DraperStudio\Database\Schema\Blueprint;

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
