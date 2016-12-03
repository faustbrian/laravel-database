<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Utils\DateTime;
use Carbon\Carbon;

trait DateTimeTrait
{
    use DateTimeFindTrait;

    public function fromToday()
    {
        return $this->fromThisDay();
    }

    public function fromYesterday()
    {
        return $this->fromLastDay();
    }

    public function fromLastSevenDays()
    {
        return $this->fromDaysAgo(6, Carbon::now()->endOfDay());
    }

    public function fromLastThirtyDays()
    {
        return $this->fromDaysAgo(29, Carbon::now()->endOfDay());
    }

    public function fromLastFourWeeks()
    {
        return $this->fromDaysAgo(Carbon::now()->daysInMonth, Carbon::now()->endOfDay());
    }

    public function fromThisDay()
    {
        return $this->fromDaysAgo(0);
    }

    public function fromThisWeek()
    {
        return $this->fromWeeksAgo(0);
    }

    public function fromThisMonth()
    {
        return $this->fromMonthsAgo(0);
    }

    public function fromThisYear()
    {
        return $this->fromYearsAgo(0);
    }

    public function fromThisDecade()
    {
        return $this->fromDecadesAgo(0);
    }

    public function fromThisCentury()
    {
        return $this->fromCenturiesAgo(0);
    }

    public function fromLastDay()
    {
        return $this->fromDaysAgo(1);
    }

    public function fromLastWeek()
    {
        return $this->fromWeeksAgo(1);
    }

    public function fromLastMonth()
    {
        return $this->fromMonthsAgo(1);
    }

    public function fromLastYear()
    {
        return $this->fromYearsAgo(1);
    }

    public function fromLastDecade()
    {
        return $this->fromDecadesAgo(1);
    }

    public function fromLastCentury()
    {
        return $this->fromCenturiesAgo(1);
    }

    public function fromDaysAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getDaysAgo($ago, $endDateTime));
    }

    public function fromWeeksAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getWeeksAgo($ago, $endDateTime));
    }

    public function fromMonthsAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getMonthsAgo($ago, $endDateTime));
    }

    public function fromYearsAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getYearsAgo($ago, $endDateTime));
    }

    public function fromDecadesAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getDecadesAgo($ago, $endDateTime));
    }

    public function fromCenturiesAgo($ago, $endDateTime = null)
    {
        return $this->fromDateTimeRange(DateTime::getCenturiesAgo($ago, $endDateTime));
    }

    public function fromDateTimeRange($range, $exact = false)
    {
        if (!is_array($range)) {
            $range = DateTime::getDateTimeRange($range, $range, $exact);
        } else {
            $range = [
                (string) new Carbon($range[0]),
                (string) new Carbon($range[1]),
            ];
        }

        return $this->findWhereBetween('created_at', $range);
    }
}
