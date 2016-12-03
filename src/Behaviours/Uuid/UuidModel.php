<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Behaviours\Uuid;

trait UuidModel
{
    public static function bootUuidTrait()
    {
        static::observe(new UuidObserver());
    }

    public function generateUuid()
    {
        $strategy = $this->uuidStrategy();

        switch ($strategy) {
            case 'uuid1':
            case 'uuid4':
                $uuid = Uuid::fromRandom($strategy);
            break;

            case 'uuid3':
            case 'uuid5':
                $uuid = Uuid::fromName($strategy, $this->uuidNamespace(), $this->uuidName());
            break;

            default:
                throw new \InvalidArgumentException('Invalid Uuid strategy specified.');
            break;
        }

        $this->setUuidValue($uuid);
    }

    public function setUuidValue(Uuid $value)
    {
        $this->{$this->uuidField()} = (string) $value;
    }

    protected function uuidField()
    {
        return 'id';
    }

    public function uuidStrategy()
    {
        return 'uuid4';
    }

    public function uuidNamespace()
    {
        return \Rhumsaa\Uuid\Uuid::NAMESPACE_DNS;
    }

    public function uuidName()
    {
        return 'php.net';
    }

    public function setUuidAttribute(Uuid $uuid)
    {
        $this->attributes[$this->uuidField()] = (string) $uuid;
    }

    public function getUuidAttribute()
    {
        return new Uuid($this->attributes[$this->uuidField()]);
    }
}
