<?php

namespace DraperStudio\Database\Traits\Repositories;

trait SlugTrait
{
    public function findBySlug($slug, $columns = ['*'])
    {
        return $this->findFirstBy('slug', $slug, $columns);
    }

    public function requireBySlug($slug, $columns = ['*'])
    {
        if (!$record = $this->findBySlug($slug, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    public function updateBySlug($slug, array $data)
    {
        $model = $this->requireBySlug($slug);

        return $this->updateModel($model, $data);
    }

    public function deleteBySlug($slug)
    {
        return $this->findBySlug($slug)->delete();
    }
}
