<?php

namespace BrianFaust\Database;

use BrianFaust\Database\Connectors\ConnectionFactory;
use BrianFaust\ServiceProvider\ServiceProvider;
use Sofa\Eloquence\ServiceProvider as SofaServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (class_exists(SofaServiceProvider::class)) {
            $this->app->register(SofaServiceProvider::class);
        }

        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }

    public function provides()
    {
        $services = [];

        if (class_exists(SofaServiceProvider::class)) {
            $services[] = SofaServiceProvider::class;
        }

        return $services;
    }
}
