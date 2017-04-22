<?php



declare(strict_types=1);



namespace BrianFaust\Database\Connectors;

use BrianFaust\Database\Schema\PostgresBuilder;
use Illuminate\Database\PostgresConnection as BasePostgresConnection;

class PostgresConnection extends BasePostgresConnection
{
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new PostgresBuilder($this);
    }
}
