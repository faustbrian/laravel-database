<?php



declare(strict_types=1);



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
