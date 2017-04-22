<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Utils\DateTime;
use Carbon\Carbon;

trait DateTimeFindTrait
{
    public function findWhereDateTimeBetween($key, $value, $column, $range)
    {
        return $this->getModel()
                    ->where($key, '=', $value)
                    ->whereBetween($column, $range)
                    ->get();
    }

    public function findFromToday($key, $value)
    {
        return $this->findFromThisDay($key, $value);
    }

    public function findFromYesterday($key, $value)
    {
        return $this->findFromLastDay($key, $value);
    }

    public function findFromLastSevenDays($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo(6, Carbon::now()->endOfDay())
        );
    }

    public function findFromLastThirtyDays($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo(29, Carbon::now()->endOfDay())
        );
    }

    public function findFromLastFourWeeks($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo(Carbon::now()->daysInMonth, Carbon::Now()->endOfDay())
        );
    }

    public function findFromThisDay($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo(0)
        );
    }

    public function findFromThisWeek($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getWeeksAgo(0)
        );
    }

    public function findFromThisMonth($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getMonthsAgo(0)
        );
    }

    public function findFromThisYear($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getYearsAgo(0)
        );
    }

    public function findFromThisDecade($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDecadesAgo(0)
        );
    }

    public function findFromThisCentury($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getCenturiesAgo(0)
        );
    }

    public function findFromLastDay($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo(1)
        );
    }

    public function findFromLastWeek($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getWeeksAgo(1)
        );
    }

    public function findFromLastMonth($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getMonthsAgo(1)
        );
    }

    public function findFromLastYear($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getYearsAgo(1)
        );
    }

    public function findFromLastDecade($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDecadesAgo(1)
        );
    }

    public function findFromLastCentury($key, $value)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getCenturiesAgo(1)
        );
    }

    public function findFromDaysAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDaysAgo($ago, $endDateTime)
        );
    }

    public function findFromWeeksAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getWeeksAgo($ago, $endDateTime)
        );
    }

    public function findFromMonthsAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getMonthsAgo($ago, $endDateTime)
        );
    }

    public function findFromYearsAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getYearsAgo($ago, $endDateTime)
        );
    }

    public function findFromDecadesAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getDecadesAgo($ago, $endDateTime)
        );
    }

    public function findFromCenturiesAgo($key, $value, $ago, $endDateTime = null)
    {
        return $this->findWhereDateTimeBetween(
            $key, $value, 'created_at', DateTime::getCenturiesAgo($ago, $endDateTime)
        );
    }

    public function findFromDateTimeRange($key, $value, $range, $exact = false)
    {
        if (!is_array($range)) {
            $range = DateTime::getDateTimeRange($range, $range, $exact);
        } else {
            $range = [
                (string) new Carbon($range[0]),
                (string) new Carbon($range[1]),
            ];
        }

        return $this->findWhereDateTimeBetween($key, $value, 'created_at', $range);
    }
}
