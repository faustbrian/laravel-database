<?php



declare(strict_types=1);



namespace BrianFaust\Database\Behaviours\Hashid;

use Hashids\Hashids;

class Hashid
{
    private $hashid;

    public function __construct($hashid)
    {
        $this->hashid = $hashid;
    }

    public static function fromId($id, $length)
    {
        return static::createHashid($id, $length);
    }

    public static function fromString($string, $length)
    {
        return static::createHashid(strlen($string) + time() + rand(), $length);
    }

    public static function fromRandom($length)
    {
        $numbers = [strlen(str_random($length)), rand(), $length];

        $numbers = array_merge(
            $numbers, static::uniqueRandomNumbersWithinRange(
                rand(1, 256) * rand(1, 256),
                rand(1, 256) * rand(1, 256),
                rand(1, 64)
            )
        );

        return static::createHashid($numbers, $length);
    }

    public function __toString()
    {
        return (string) $this->hashid;
    }

    private static function createHashid($string, $length)
    {
        if (is_array($string)) {
            $string = implode('', $string);
        }

        $salt = md5(uniqid().$string);
        $hashid = (new Hashids($salt, $length))->encode((int) $string);

        return new self(substr($hashid, 0, $length));
    }

    private static function uniqueRandomNumbersWithinRange($min, $max, $quantity)
    {
        $numbers = range($min, $max);

        shuffle($numbers);

        return array_slice($numbers, 0, $quantity);
    }
}
