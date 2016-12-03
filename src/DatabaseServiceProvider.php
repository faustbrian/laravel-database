<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database;

use BrianFaust\Database\Connectors\ConnectionFactory;
use BrianFaust\ServiceProvider\ServiceProvider;
use Sofa\Eloquence\ServiceProvider as SofaServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
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
