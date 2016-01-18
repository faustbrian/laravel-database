<?php

namespace DraperStudio\Database\Contracts\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

interface CrudlTrait
{
    public function create(array $data);

    public function saveModel(array $data);

    public function update($id, array $data, $column = 'id');

    public function updateFill($id, array $data);

    public function delete($id);

    public function truncate();

    public function firstOrCreate(array $attributes);

    public function has($relation, $columns = ['*']);

    public function saveHasOneOrMany(Model $model, $relationship, array $attributes);
}
