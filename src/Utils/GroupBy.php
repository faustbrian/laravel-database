<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Utils;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class GroupBy
{
    public static function seconds($data)
    {
        return static::groupByDateTime($data, 's');
    }

    public static function minutes($data)
    {
        return static::groupByDateTime($data, 'i');
    }

    public static function hours($data, $format = 'H')
    {
        return static::groupByDateTime($data, $format);
    }

    public static function days($data, $format = 'd')
    {
        return static::groupByDateTime($data, $format);
    }

    public static function weeks($data)
    {
        return static::groupByDateTime($data, 'W');
    }

    public static function months($data, $format = 'm')
    {
        return static::groupByDateTime($data, $format);
    }

    public static function years($data, $format = 'Y')
    {
        return static::groupByDateTime($data, $format);
    }

    public static function timezone($data, $format = 'e')
    {
        return static::groupByDateTime($data, $format);
    }

    public static function createdAt($data)
    {
        return static::groupByKey($data, 'created_at');
    }

    public static function updatedAt($data)
    {
        return static::groupByKey($data, 'updated_at');
    }

    public static function deletedAt($data)
    {
        return static::groupByKey($data, 'deleted_at');
    }

    public static function groupByKey($data, $key)
    {
        $data = static::toCollection($data)->groupBy(function ($item) use ($key) {
            return (string) $item->$key;
        });

        return static::sortByKeys($data);
    }

    public static function groupByDateTime($data, $dateFormat)
    {
        $data = static::toCollection($data)->groupBy(function ($date) use ($dateFormat) {
            return Carbon::parse($date->created_at)->format($dateFormat);
        });

        return static::sortByKeys($data);
    }

    private static function sortByKeys($data)
    {
        return static::toCollection($data)->sortBy(function ($item, $key) {
            return $key;
        });
    }

    private static function toCollection($data)
    {
        if (!$data instanceof Collection) {
            $data = new Collection($data);
        }

        return $data;
    }
}
