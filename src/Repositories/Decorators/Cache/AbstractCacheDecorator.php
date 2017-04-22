<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Decorators\Cache;

use BrianFaust\Database\Contracts\Repositories\Decorators\Cache;
use BrianFaust\Database\Contracts\Repositories\Repository;

abstract class AbstractCacheDecorator
{
    protected $cache;

    protected $repository;

    protected $skipCache = false;

    public function __construct(Repository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    public function skipCache()
    {
        $this->skipCache = true;

        return $this;
    }

    protected function getFromCache($key)
    {
        if ($this->skipCache) {
            return false;
        }

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        return false;
    }

    protected function buildCacheKey(array $values)
    {
        if ($criteria = $this->repository->getCriteria()) {
            $values[] = serialize($criteria->toArray());
        }

        $value = implode('.', array_map(function ($item) {
            return is_array($item) ? implode('.', $item) : $item;
        }, $values));

        return md5($value);
    }

    protected function put($key, $value)
    {
        $this->cache->put($key, $value);

        return $value;
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->repository, $name], $arguments);
    }
}
