<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface HashidTrait
{
    public function findByHashid($hashid, $columns = ['*']);

    public function requireByHashid($hashid, $columns = ['*']);

    public function updateByHashid($hashid, array $data);

    public function deleteByHashid($hashid);
}
