<?php



declare(strict_types=1);



namespace BrianFaust\Database\Behaviours\Uuid;

use Illuminate\Database\Eloquent\Model;

class UuidObserver
{
    public function creating(Model $model)
    {
        $model->generateUuid();
    }
}
