<?php



declare(strict_types=1);



namespace BrianFaust\Database\Connectors;

use Illuminate\Database\Connectors\ConnectionFactory as BaseConnectionFactory;
use InvalidArgumentException;
use PDO;

class ConnectionFactory extends BaseConnectionFactory
{
    protected function createConnection($driver, PDO $connection, $database, $prefix = '', array $config = [])
    {
        if ($this->container->bound($key = "db.connection.{$driver}")) {
            return $this->container->make($key, [$connection, $database, $prefix, $config]);
        }

        switch ($driver) {
            case 'mysql':
                return new MySqlConnection($connection, $database, $prefix, $config);

            case 'pgsql':
                return new PostgresConnection($connection, $database, $prefix, $config);

            case 'sqlite':
                return new SQLiteConnection($connection, $database, $prefix, $config);

            case 'sqlsrv':
                return new SqlServerConnection($connection, $database, $prefix, $config);
        }

        throw new InvalidArgumentException("Unsupported driver [$driver]");
    }
}
