<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Repositories\Criteria\Criterion;

trait CriteriaTrait
{
    protected $criteria;

    protected $skipCriteria = false;

    public function resetScope()
    {
        $this->skipCriteria(false);

        return $this;
    }

    public function skipCriteria($status = true)
    {
        $this->skipCriteria = $status;

        return $this;
    }

    public function getCriteria()
    {
        return $this->criteria;
    }

    public function getByCriteria(Criterion $criterion)
    {
        $model = $criterion->apply($this->getModel(), $this);

        $this->setModel($model);

        return $this;
    }

    public function pushCriteria(Criterion $criterion)
    {
        $this->criteria->push($criterion);

        return $this;
    }

    public function applyCriteria()
    {
        if ($this->skipCriteria === true) {
            return $this;
        }

        foreach ($this->getCriteria() as $criterion) {
            if ($criterion instanceof Criterion) {
                $model = $criterion->apply($this->getModel(), $this);

                $this->setModel($model);
            }
        }

        $this->setModel($this->getModel());

        return $this;
    }
}
