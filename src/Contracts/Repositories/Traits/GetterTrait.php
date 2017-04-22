<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface GetterTrait
{
    public function getFirst($columns = ['*']);

    public function getLast($columns = ['*']);
}
