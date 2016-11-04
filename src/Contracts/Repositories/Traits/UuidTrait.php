<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface UuidTrait
{
    public function findByUuid($uuid, $columns = ['*']);

    public function requireByUuid($uuid, $columns = ['*']);

    public function updateByUuid($uuid, array $data);

    public function deleteByUuid($uuid);
}
