<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface DateTimeFindTrait
{
    public function findWhereDateTimeBetween($key, $value, $column, $range);

    public function findFromToday($key, $value);

    public function findFromYesterday($key, $value);

    public function findFromLastSevenDays($key, $value);

    public function findFromLastThirtyDays($key, $value);

    public function findFromLastFourWeeks($key, $value);

    public function findFromThisDay($key, $value);

    public function findFromThisWeek($key, $value);

    public function findFromThisMonth($key, $value);

    public function findFromThisYear($key, $value);

    public function findFromThisDecade($key, $value);

    public function findFromThisCentury($key, $value);

    public function findFromLastDay($key, $value);

    public function findFromLastWeek($key, $value);

    public function findFromLastMonth($key, $value);

    public function findFromLastYear($key, $value);

    public function findFromLastDecade($key, $value);

    public function findFromLastCentury($key, $value);

    public function findFromDaysAgo($key, $value, $ago, $endDateTime = null);

    public function findFromWeeksAgo($key, $value, $ago, $endDateTime = null);

    public function findFromMonthsAgo($key, $value, $ago, $endDateTime = null);

    public function findFromYearsAgo($key, $value, $ago, $endDateTime = null);

    public function findFromDecadesAgo($key, $value, $ago, $endDateTime = null);

    public function findFromCenturiesAgo($key, $value, $ago, $endDateTime = null);

    public function findFromDateTimeRange($key, $value, $range, $exact = false);
}
