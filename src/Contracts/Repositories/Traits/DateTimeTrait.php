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

interface DateTimeTrait
{
    public function fromToday();

    public function fromYesterday();

    public function fromLastSevenDays();

    public function fromLastThirtyDays();

    public function fromLastFourWeeks();

    public function fromThisDay();

    public function fromThisWeek();

    public function fromThisMonth();

    public function fromThisYear();

    public function fromThisDecade();

    public function fromThisCentury();

    public function fromLastDay();

    public function fromLastWeek();

    public function fromLastMonth();

    public function fromLastYear();

    public function fromLastDecade();

    public function fromLastCentury();

    public function fromDaysAgo($ago, $endDateTime = null);

    public function fromWeeksAgo($ago, $endDateTime = null);

    public function fromMonthsAgo($ago, $endDateTime = null);

    public function fromYearsAgo($ago, $endDateTime = null);

    public function fromDecadesAgo($ago, $endDateTime = null);

    public function fromCenturiesAgo($ago, $endDateTime = null);

    public function fromDateTimeRange($range, $exact = false);
}
