<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Schema;

use BrianFaust\Database\Schema\Blueprint;
use Closure;

trait BuilderTrait
{
    protected $config = [
        'timestamps'         => true,
        'nullableTimestamps' => false,
        'softDeletes'        => false,
        'rememberToken'      => false,
        'hashid'             => false,
    ];

    public function withPrimaryId($table, Closure $callback)
    {
        return $this->withPrimaryKey('increments', 'id', $table, $callback);
    }

    public function withPrimaryUuid($table, Closure $callback)
    {
        return $this->withPrimaryKey('uuid', 'id', $table, $callback);
    }

    public function withPrimaryHashid($table, Closure $callback)
    {
        return $this->withPrimaryKey('hashid', 'id', $table, $callback);
    }

    private function withPrimaryKey($type, $key, $table, Closure $callback)
    {
        $blueprint = $this->createBlueprint($table);

        // increments already is a primary key
        ($type === 'increments') ? $blueprint->{$type}($key) : $blueprint->{$type}($key)->primary();

        foreach ($this->config as $key => $value) {
            if (!empty($value)) {
                if ($key === 'hashid') {
                    $blueprint->hashid('hashid')->index();

                    continue;
                }

                $blueprint->{$key}();
            }
        }

        $this->createTable($blueprint, $callback);
    }

    public function timestamps($value = true)
    {
        $this->setConfig('nullableTimestamps', false);

        return $this->setConfig('timestamps', $value);
    }

    public function nullableTimestamps($value = true)
    {
        $this->setConfig('timestamps', false);

        return $this->setConfig('nullableTimestamps', $value);
    }

    public function softDeletes($value = true)
    {
        return $this->setConfig('softDeletes', $value);
    }

    public function rememberToken($value = true)
    {
        return $this->setConfig('rememberToken', $value);
    }

    public function hashid($value = true)
    {
        return $this->setConfig('hashid', $value);
    }

    protected function createBlueprint($table, Closure $callback = null)
    {
        if (isset($this->resolver)) {
            return call_user_func($this->resolver, $table, $callback);
        }

        return new Blueprint($table, $callback);
    }

    private function createTable(Blueprint $blueprint, Closure $callback)
    {
        $blueprint->create();

        $callback($blueprint);

        $this->build($blueprint);

        $this->resetConfig();
    }

    private function setConfig($key, $value)
    {
        $this->config[$key] = $value;

        return $this;
    }

    private function resetConfig()
    {
        $this->config = [
            'timestamps'         => true,
            'nullableTimestamps' => false,
            'softDeletes'        => false,
            'rememberToken'      => false,
        ];
    }
}
