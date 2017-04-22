<?php



declare(strict_types=1);



namespace BrianFaust\Database;

use BrianFaust\Database\Connectors\ConnectionFactory;
use BrianFaust\ServiceProvider\AbstractServiceProvider;
use Sofa\Eloquence\ServiceProvider as SofaServiceProvider;

class DatabaseServiceProvider extends AbstractServiceProvider
{
    public function register(): void
    {
        if (class_exists(SofaServiceProvider::class)) {
            $this->app->register(SofaServiceProvider::class);
        }

        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }

    public function provides(): array
    {
        $services = [];

        if (class_exists(SofaServiceProvider::class)) {
            $services[] = SofaServiceProvider::class;
        }

        return $services;
    }
}
