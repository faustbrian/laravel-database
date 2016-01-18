<?php

namespace DraperStudio\Database\Behaviours\Hashid;

use Illuminate\Database\Eloquent\Model;

class HashidObserver
{
    public function creating(Model $model)
    {
        $model->generateHashid();
    }

    public function created(Model $model)
    {
        if ($model->hashidStrategy() == 'id') {
            $model->generateHashidFromId();
            $model->save();
        }
    }
}
