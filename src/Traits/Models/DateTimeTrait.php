<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Models;

use BrianFaust\Database\Utils\DateTime;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateTimeTrait
{
    public function scopeFromToday(Builder $query)
    {
        return $this->fromThisDay();
    }

    public function scopeFromYesterday(Builder $query)
    {
        return $this->fromLastDay();
    }

    public function scopeFromLastSevenDays(Builder $query)
    {
        return $this->fromDaysAgo(6, Carbon::now()->endOfDay());
    }

    public function scopeFromLastThirtyDays(Builder $query)
    {
        return $this->fromDaysAgo(29, Carbon::now()->endOfDay());
    }

    public function scopeFromLastFourWeeks(Builder $query)
    {
        return $this->fromDaysAgo(Carbon::now()->daysInMonth, Carbon::now()->endOfDay());
    }

    public function scopeFromThisDay(Builder $query)
    {
        return $this->fromDaysAgo(0);
    }

    public function scopeFromThisWeek(Builder $query)
    {
        return $this->fromWeeksAgo(0);
    }

    public function scopeFromThisMonth(Builder $query)
    {
        return $this->fromMonthsAgo(0);
    }

    public function scopeFromThisYear(Builder $query)
    {
        return $this->fromYearsAgo(0);
    }

    public function scopeFromThisDecade(Builder $query)
    {
        return $this->fromDecadesAgo(0);
    }

    public function scopeFromThisCentury(Builder $query)
    {
        return $this->fromCenturiesAgo(0);
    }

    public function scopeFromLastDay(Builder $query)
    {
        return $this->fromDaysAgo(1);
    }

    public function scopeFromLastWeek(Builder $query)
    {
        return $this->fromWeeksAgo(1);
    }

    public function scopeFromLastMonth(Builder $query)
    {
        return $this->fromMonthsAgo(1);
    }

    public function scopeFromLastYear(Builder $query)
    {
        return $this->fromYearsAgo(1);
    }

    public function scopeFromLastDecade(Builder $query)
    {
        return $this->fromDecadesAgo(1);
    }

    public function scopeFromLastCentury(Builder $query)
    {
        return $this->fromCenturiesAgo(1);
    }

    public function scopeFromDaysAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getDaysAgo($ago, $endDateTime));
    }

    public function scopeFromWeeksAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getWeeksAgo($ago, $endDateTime));
    }

    public function scopeFromMonthsAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getMonthsAgo($ago, $endDateTime));
    }

    public function scopeFromYearsAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getYearsAgo($ago, $endDateTime));
    }

    public function scopeFromDecadesAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getDecadesAgo($ago, $endDateTime));
    }

    public function scopeFromCenturiesAgo(Builder $query, $ago, $endDateTime = null)
    {
        return $this->scopeFromDateTimeRange(DateTime::getCenturiesAgo($ago, $endDateTime));
    }

    public function scopeFromDateTimeRange(Builder $query, $range, $exact = true)
    {
        if (!is_array($range)) {
            $range = DateTime::getDateTimeRange($range, $range, $exact);
        } else {
            $range = [
                (string) new Carbon($range[0]),
                (string) new Carbon($range[1]),
            ];
        }

        return $query->whereBetween('created_at', $range);
    }
}
