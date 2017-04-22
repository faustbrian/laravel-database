<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements Repository
{
    protected $app;

    protected $model;

    public function __construct(Container $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    abstract public function getModelClass();

    public function makeModel()
    {
        return $this->setModel($this->app->make($this->getModelClass()));
    }

    public function setModel($model)
    {
        return $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}
