<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Decorators\Cache;

use BrianFaust\Database\Contracts\Repositories\Decorators\Cache;
use Illuminate\Cache\CacheManager as IlluminateCacheManager;

class CacheManager implements Cache
{
    protected $cache;

    protected $tag;

    protected $minutes;

    public function __construct(IlluminateCacheManager $cache, $tag, $minutes = 60)
    {
        $this->cache = $cache;
        $this->tag = $tag;
        $this->minutes = $minutes;
    }

    public function get($key)
    {
        return $this->cacheTags()->get($key);
    }

    public function put($key, $value, $minutes = null)
    {
        return $this->cacheTags()->put($key, $value, $minutes ?: $this->minutes);
    }

    public function has($key)
    {
        return $this->cacheTags()->has($key);
    }

    public function increment($key, $value = 1)
    {
        return $this->cacheTags()->increment($key, $value);
    }

    public function decrement($key, $value = 1)
    {
        return $this->cacheTags()->decrement($key, $value);
    }

    public function forever($key, $value)
    {
        return $this->cacheTags()->forever($key, $value);
    }

    public function forget($key)
    {
        return $this->cacheTags()->forget($key);
    }

    public function flush()
    {
        return $this->cacheTags()->flush();
    }

    public function cacheTags()
    {
        return $this->cache->tags($this->tag);
    }
}
