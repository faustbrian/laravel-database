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

namespace Artisanry\Database\Contracts\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

interface DateTimeTrait
{
    public function scopeFromToday(Builder $query);

    public function scopeFromYesterday(Builder $query);

    public function scopeFromLastSevenDays(Builder $query);

    public function scopeFromLastThirtyDays(Builder $query);

    public function scopeFromLastFourWeeks(Builder $query);

    public function scopeFromThisDay(Builder $query);

    public function scopeFromThisWeek(Builder $query);

    public function scopeFromThisMonth(Builder $query);

    public function scopeFromThisYear(Builder $query);

    public function scopeFromThisDecade(Builder $query);

    public function scopeFromThisCentury(Builder $query);

    public function scopeFromLastDay(Builder $query);

    public function scopeFromLastWeek(Builder $query);

    public function scopeFromLastMonth(Builder $query);

    public function scopeFromLastYear(Builder $query);

    public function scopeFromLastDecade(Builder $query);

    public function scopeFromLastCentury(Builder $query);

    public function scopeFromDaysAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromWeeksAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromMonthsAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromYearsAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromDecadesAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromCenturiesAgo(Builder $query, $ago, $endDateTime = null);

    public function scopeFromDateTimeRange(Builder $query, $range, $exact = true);
}
