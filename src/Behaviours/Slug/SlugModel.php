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

namespace BrianFaust\Database\Behaviours\Slug;

trait SlugModel
{
    public static function bootSlugTrait()
    {
        static::observe(new SlugObserver());
    }

    public function generateSlugFromId()
    {
        $this->setSlugValue(Slug::fromId($this->getKey()));
    }

    public function generateSlugFromFields(array $fields)
    {
        $slug = Slug::fromString(implode('-', $this->getSlugFields($fields)));

        $this->setSlugValue($slug);
    }

    public function getSlugFields(array $fields)
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

    public function generateSlug()
    {
        $strategy = $this->slugStrategy();

        if ($strategy == 'id') {
            $this->generateSlugFromId();
        } else {
            $this->generateSlugFromFields((array) $strategy);
        }
    }

    public function setSlugValue(Slug $value)
    {
        $this->{$this->slugField()} = $value;
    }

    protected function slugField()
    {
        return 'slug';
    }

    public function slugStrategy()
    {
        return 'id';
    }

    public function setSlugAttribute(Slug $slug)
    {
        $this->attributes[$this->slugField()] = (string) $slug;
    }

    public function getSlugAttribute()
    {
        return new Slug($this->attributes[$this->slugField()]);
    }
}
