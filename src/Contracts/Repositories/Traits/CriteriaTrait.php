<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories\Traits;

use BrianFaust\Database\Repositories\Criteria\Criterion;

interface CriteriaTrait
{
    public function resetScope();

    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(Criterion $criterion);

    public function pushCriteria(Criterion $criterion);

    public function applyCriteria();
}
