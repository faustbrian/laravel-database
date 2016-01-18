<?php

namespace DraperStudio\Database\Traits\Repositories\Decorators\Cache;

trait HashidTrait
{
    public function findByHashid($hashid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findByHashid($hashid, $columns);

        return $this->put($key, $records);
    }

    public function requireByHashid($hashid, $columns = ['*'])
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->requireByHashid($hashid, $columns);

        return $this->put($key, $records);
    }

    public function updateByHashid($hashid, array $data)
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->updateByHashid($hashid, $data);

        return $this->put($key, $records);
    }

    public function deleteByHashid($hashid)
    {
        $key = $this->buildCacheKey(['hashid', $hashid]);

        if ($this->getFromCache($key)) {
            $this->cache->forget($key);
        }

        $records = $this->repository->deleteByHashid($hashid);

        return $this->put($key, $records);
    }
}
