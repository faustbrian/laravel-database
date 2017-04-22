<?php



declare(strict_types=1);



namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class HavingRaw extends Criterion
{
    private $sql;

    private $bindings;

    private $boolean;

    public function __construct($sql, array $bindings = [], $boolean = 'and')
    {
        $this->sql = $sql;
        $this->bindings = $bindings;
        $this->boolean = $boolean;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->havingRaw($this->sql, $this->bindings, $this->boolean);
    }
}
