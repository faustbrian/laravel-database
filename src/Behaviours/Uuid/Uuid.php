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

namespace BrianFaust\Database\Behaviours\Uuid;

use Rhumsaa\Uuid\Uuid as RhumsaaUuid;

class Uuid
{
    private $uuid;

    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    public static function fromRandom($strategy)
    {
        $uuid = RhumsaaUuid::{$strategy}();

        return new self($uuid);
    }

    public static function fromName($strategy, $namespace, $name)
    {
        $uuid = RhumsaaUuid::{$strategy}($namespace, $name);

        return new self($uuid);
    }

    public function __toString()
    {
        return (string) $this->uuid;
    }
}
