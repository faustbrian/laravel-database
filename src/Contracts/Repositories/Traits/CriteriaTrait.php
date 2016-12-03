<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
