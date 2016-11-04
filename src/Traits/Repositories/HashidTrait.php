<?php

namespace BrianFaust\Database\Traits\Repositories;

trait HashidTrait
{
    public function findByHashid($hashid, $columns = ['*'])
    {
        return $this->findFirstBy('hashid', $hashid, $columns);
    }

    public function requireByHashid($hashid, $columns = ['*'])
    {
        if (!$record = $this->findByHashid($hashid, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    public function updateByHashid($hashid, array $data)
    {
        $model = $this->requireByHashid($hashid);

        return $this->updateModel($model, $data);
    }

    public function deleteByHashid($hashid)
    {
        return $this->findByHashid($hashid)->delete();
    }
}
