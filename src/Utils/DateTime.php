<?php

namespace BrianFaust\Database\Utils;

use Carbon\Carbon;

class DateTime
{
    public static function getDaysAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subDays($ago)->startOfDay(),
            $endDateTime ?: Carbon::now()->subDays($ago)->endOfDay()
        );
    }

    public static function getWeeksAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subWeeks($ago)->startOfWeek(),
            $endDateTime ?: Carbon::now()->subWeeks($ago)->endOfWeek()
        );
    }

    public static function getMonthsAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subMonths($ago)->startOfMonth(),
            $endDateTime ?: Carbon::now()->subMonths($ago)->endOfMonth()
        );
    }

    public static function getYearsAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subYears($ago)->startOfYear(),
            $endDateTime ?: Carbon::now()->subYears($ago)->endOfYear()
        );
    }

    public static function getDecadesAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subYears($ago * 10)->startOfDecade(),
            $endDateTime ?: Carbon::now()->subYears($ago * 10)->endOfDecade()
        );
    }

    public static function getCenturiesAgo($ago, $endDateTime = null)
    {
        return static::getDateTimeRange(
            Carbon::now()->subYears($ago * 100)->startOfCentury(),
            $endDateTime ?: Carbon::now()->subYears($ago * 100)->endOfCentury()
        );
    }

    public static function getDateTimeRange($start, $end = null, $exact = false)
    {
        return [
            static::buildDateTime($start, !$exact),
            static::buildDateTime($end ?: $start, false, !$exact),
        ];
    }

    private static function buildDateTime($dateTime, $startOfDay = false, $endOfDay = false)
    {
        $dateTime = new Carbon($dateTime);

        if ($startOfDay) {
            $dateTime = $dateTime->startOfDay();
        }

        if ($endOfDay) {
            $dateTime = $dateTime->endOfDay();
        }

        return (string) $dateTime;
    }
}
