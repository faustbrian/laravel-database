<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories;

interface Repository
{
    public function setModel($model);

    public function getModel();

    public function makeModel();
}
