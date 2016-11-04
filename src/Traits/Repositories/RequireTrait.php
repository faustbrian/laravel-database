<?php

namespace BrianFaust\Database\Traits\Repositories;

trait RequireTrait
{
    public function requireBy($column, $value, $columns = ['*'])
    {
        if (!$record = $this->findFirstBy($column, $value, $columns)) {
            $this->modelNotFound($this->getModel());
        }

        return $record;
    }

    public function requireById($id, $columns = ['*'])
    {
        return $this->requireBy('id', $id, $columns);
    }
}
