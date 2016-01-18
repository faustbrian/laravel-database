<?php

namespace DraperStudio\Database\Behaviours\Slug;

use Illuminate\Database\Eloquent\Model;

class SlugObserver
{
    public function creating(Model $model)
    {
        $model->generateSlug();
    }

    public function created(Model $model)
    {
        if ($model->slugStrategy() == 'id') {
            $model->generateSlugFromId();
            $model->save();
        }
    }
}
