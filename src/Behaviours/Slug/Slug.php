<?php



declare(strict_types=1);



namespace BrianFaust\Database\Behaviours\Slug;

use Hashids\Hashids;
use Stringy\Stringy;

class Slug
{
    private $slug;

    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public static function fromId($id)
    {
        $salt = md5(uniqid().$id);
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $slug = with(new Hashids($salt, $length = 8, $alphabet))->encode($id);

        return new self($slug);
    }

    public static function fromString($string)
    {
        return new self((new Stringy($string))->slugify());
    }

    public function __toString()
    {
        return (string) $this->slug;
    }
}
