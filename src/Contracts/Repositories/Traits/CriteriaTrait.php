<?php

namespace DraperStudio\Database\Contracts\Repositories\Traits;

use DraperStudio\Database\Repositories\Criteria\Criterion;

interface CriteriaTrait
{
    public function resetScope();

    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(Criterion $criterion);

    public function pushCriteria(Criterion $criterion);

    public function applyCriteria();
}
