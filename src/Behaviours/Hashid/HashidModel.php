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

namespace Artisanry\Database\Behaviours\Hashid;

trait HashidModel
{
    public static function bootHashidTrait()
    {
        static::observe(new HashidObserver());
    }

    public function generateHashidFromId()
    {
        $this->setHashidValue(Hashid::fromId($this->getKey(), $this->hashidLength()));
    }

    public function generateHashidFromFields(array $fields)
    {
        $hashid = Hashid::fromString(implode('-', $this->getHashidFields($fields)), $this->hashidLength());

        $this->setHashidValue($hashid);
    }

    public function generateHashidFromRandom()
    {
        $hashid = Hashid::fromRandom($this->hashidLength());

        $this->setHashidValue($hashid);
    }

    public function getHashidFields(array $fields)
    {
        $fields = array_map(function ($field) {
            if (str_contains($field, '.')) {
                return object_get($this, $field); // this acts as a delimiter, which we can replace with /
            } else {
                return $this->{$field};
            }
        }, $fields);

        return $fields;
    }

    public function generateHashid()
    {
        $strategy = $this->hashidStrategy();

        if ($strategy == 'random') {
            $this->generateHashidFromRandom();
        } elseif ($strategy == 'id') {
            $this->generateHashidFromId();
        } else {
            $this->generateHashidFromFields((array) $strategy);
        }
    }

    public function setHashidValue(Hashid $value)
    {
        $this->{$this->hashidField()} = $value;
    }

    protected function hashidField()
    {
        return 'hashid';
    }

    public function hashidStrategy()
    {
        return 'random';
    }

    public function hashidLength()
    {
        return 8;
    }

    public function setHashidAttribute(Hashid $hashid)
    {
        $this->attributes[$this->hashidField()] = (string) $hashid;
    }

    public function getHashidAttribute()
    {
        return new Hashid($this->attributes[$this->hashidField()]);
    }
}
