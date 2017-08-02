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

namespace BrianFaust\Database\Traits\Schema;

trait TypesTrait
{
    public function hashid($column)
    {
        return $this->char($column, 8);
    }

    public function uuid($column)
    {
        return $this->char($column, 36);
    }

    public function money($column)
    {
        return $this->decimal($column, 13, 4);
    }

    public function bcrypt($column)
    {
        return $this->string($column, 60);
    }

    public function ipaddr($column)
    {
        return $this->string($column, 45);
    }

    public function percentage($column)
    {
        return $this->decimal($column, 5, 2);
    }
}
