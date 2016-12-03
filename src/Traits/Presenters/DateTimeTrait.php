<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Database\Traits\Presenters;

use Carbon\Carbon;

trait DateTimeTrait
{
    public function createdAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->created_at) : $this->created_at->format($format);
    }

    public function updatedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->updated_at) : $this->updated_at->format($format);
    }

    public function deletedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->deleted_at) : $this->deleted_at->format($format);
    }

    public function getTimeAgo($dateTime)
    {
        return Carbon::createFromTimeStamp(strtotime($dateTime))->diffForHumans();
    }
}
