<?php

namespace DraperStudio\Database\Contracts\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

interface ExceptionTrait
{
    public function modelNotFound(Model $model);
}
