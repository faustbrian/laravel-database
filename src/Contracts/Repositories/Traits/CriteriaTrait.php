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

namespace Artisanry\Database\Contracts\Repositories\Traits;

use Artisanry\Database\Repositories\Criteria\Criterion;

interface CriteriaTrait
{
    public function resetScope();

    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(Criterion $criterion);

    public function pushCriteria(Criterion $criterion);

    public function applyCriteria();
}
