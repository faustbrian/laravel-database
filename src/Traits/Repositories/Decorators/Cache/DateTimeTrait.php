<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Repositories\Decorators\Cache;

trait DateTimeTrait
{
    use DateTimeFindTrait;

    public function fromToday()
    {
        $key = $this->buildCacheKey(['fromToday']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromToday();

        return $this->put($key, $records);
    }

    public function fromYesterday()
    {
        $key = $this->buildCacheKey(['fromYesterday']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromYesterday();

        return $this->put($key, $records);
    }

    public function fromLastSevenDays()
    {
        $key = $this->buildCacheKey(['fromLastSevenDays']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastSevenDays();

        return $this->put($key, $records);
    }

    public function fromLastThirtyDays()
    {
        $key = $this->buildCacheKey(['fromLastThirtyDays']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastThirtyDays();

        return $this->put($key, $records);
    }

    public function fromLastFourWeeks()
    {
        $key = $this->buildCacheKey(['fromLastFourWeeks']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastFourWeeks();

        return $this->put($key, $records);
    }

    public function fromThisDay()
    {
        $key = $this->buildCacheKey(['fromThisDay']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisDay();

        return $this->put($key, $records);
    }

    public function fromThisWeek()
    {
        $key = $this->buildCacheKey(['fromThisWeek']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisWeek();

        return $this->put($key, $records);
    }

    public function fromThisMonth()
    {
        $key = $this->buildCacheKey(['fromThisMonth']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisMonth();

        return $this->put($key, $records);
    }

    public function fromThisYear()
    {
        $key = $this->buildCacheKey(['fromThisYear']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisYear();

        return $this->put($key, $records);
    }

    public function fromThisDecade()
    {
        $key = $this->buildCacheKey(['fromThisDecade']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisDecade();

        return $this->put($key, $records);
    }

    public function fromThisCentury()
    {
        $key = $this->buildCacheKey(['fromThisCentury']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromThisCentury();

        return $this->put($key, $records);
    }

    public function fromLastDay()
    {
        $key = $this->buildCacheKey(['fromLastDay']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastDay();

        return $this->put($key, $records);
    }

    public function fromLastWeek()
    {
        $key = $this->buildCacheKey(['fromLastWeek']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastWeek();

        return $this->put($key, $records);
    }

    public function fromLastMonth()
    {
        $key = $this->buildCacheKey(['fromLastMonth']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastMonth();

        return $this->put($key, $records);
    }

    public function fromLastYear()
    {
        $key = $this->buildCacheKey(['fromLastYear']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastYear();

        return $this->put($key, $records);
    }

    public function fromLastDecade()
    {
        $key = $this->buildCacheKey(['fromLastDecade']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastDecade();

        return $this->put($key, $records);
    }

    public function fromLastCentury()
    {
        $key = $this->buildCacheKey(['fromLastCentury']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromLastCentury();

        return $this->put($key, $records);
    }

    public function fromDaysAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromDaysAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromDaysAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromWeeksAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromWeeksAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromWeeksAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromMonthsAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromMonthsAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromMonthsAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromYearsAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromYearsAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromYearsAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromDecadesAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromDecadesAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromDecadesAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromCenturiesAgo($ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['fromCenturiesAgo', $ago, $endDatetime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromCenturiesAgo($ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    public function fromDateTimeRange($range, $exact = false)
    {
        $key = $this->buildCacheKey(['fromDateTimeRange', $range, $exact]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->fromDateTimeRange($range, $exact);

        return $this->put($key, $records);
    }
}
