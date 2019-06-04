<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Behaviours\CountCache;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CountCacheManager
{
    private $model;

    public function increment(Model $model)
    {
        $this->model = $model;

        $this->applyToCountCache(function ($config) {
            $this->update($config, '+', $this->model->{$config['foreignKey']});
        });
    }

    public function decrement(Model $model)
    {
        $this->model = $model;

        $this->applyToCountCache(function ($config) {
            $this->update($config, '-', $this->model->{$config['foreignKey']});
        });
    }

    protected function applyToCountCache(\Closure $function)
    {
        foreach ($this->model->countCaches() as $key => $cache) {
            $function($this->countCacheConfig($key, $cache));
        }
    }

    public function updateCache(Model $model)
    {
        $this->model = $model;

        $this->applyToCountCache(function ($config) {
            $foreignKey = $this->key($this->model, $config['foreignKey']);

            if ($this->model->getOriginal($foreignKey) && $this->model->{$foreignKey} != $this->model->getOriginal($foreignKey)) {
                $this->update($config, '-', $this->model->getOriginal($foreignKey));
                $this->update($config, '+', $this->model->{$foreignKey});
            }
        });
    }

    protected function update(array $config, $operation, $foreignKey)
    {
        if (is_null($foreignKey)) {
            return;
        }

        $table = $this->getTable($config['model']);

        // the following is required for camel-cased models, in case users are defining their attributes as camelCase
        // $field = snake_case($config['countField']);
        // $key = snake_case($config['key']);
        // $foreignKey = snake_case($foreignKey);

        $sql = "UPDATE `{$table}` SET `{$field}` = `{$field}` {$operation} 1 WHERE `{$key}` = {$foreignKey}";

        return DB::update($sql);
    }

    protected function countCacheConfig($cacheKey, $cacheOptions)
    {
        $opts = [];

        // Smallest number of options provided, figure out the rest
        if (is_numeric($cacheKey)) {
            $relatedModel = $cacheOptions;
        } else {
            $relatedModel = $cacheOptions;
            $opts['countField'] = $cacheKey;

            if (is_array($cacheOptions)) {
                if (isset($cacheOptions[2])) {
                    $opts['key'] = $cacheOptions[2];
                }

                if (isset($cacheOptions[1])) {
                    $opts['foreignKey'] = $cacheOptions[1];
                }

                if (isset($cacheOptions[0])) {
                    $relatedModel = $cacheOptions[0];
                }
            }
        }

        return $this->defaults($opts, $relatedModel);
    }

    public function getTable($model)
    {
        if (!is_object($model)) {
            $model = new $model();
        }

        return $model->getTable();
    }

    protected function defaults($options, $relatedModel)
    {
        $defaults = [
            'model'      => $relatedModel,
            'countField' => $this->field($this->model, 'count'),
            'foreignKey' => $this->field($relatedModel, 'id'),
            'key'        => 'id',
        ];

        return array_merge($defaults, $options);
    }

    protected function field($model, $field)
    {
        $class = strtolower(class_basename($model));
        $field = $class.'_'.$field;

        return $field;
    }

    protected function key($model, $field)
    {
        if (method_exists($model, 'getTrueKey')) {
            return $model->getTrueKey($field);
        }

        return $field;
    }
}
