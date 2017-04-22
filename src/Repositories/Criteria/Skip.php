<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class Skip extends Criterion
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->skip($this->value);
    }
}
