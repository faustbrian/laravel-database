<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Traits\Repositories\Decorators\Cache;

use Artisanry\Database\Repositories\Criteria\Criterion;

trait CriteriaTrait
{
    public function resetScope()
    {
        return $this->repository->resetScope();
    }

    public function skipCriteria($status = true)
    {
        return $this->repository->skipCriteria($status);
    }

    public function getCriteria()
    {
        return $this->repository->getCriteria();
    }

    public function getByCriteria(Criterion $criterion)
    {
        return $this->repository->getByCriteria($criterion);
    }

    public function pushCriteria(Criterion $criterion)
    {
        return $this->repository->pushCriteria($criterion);
    }

    public function applyCriteria()
    {
        return $this->repository->applyCriteria();
    }
}
