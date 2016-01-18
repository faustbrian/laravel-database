<?php

namespace DraperStudio\Database\Contracts\Models\Traits;

interface CamelCaseAttributes
{
    public function setAttribute($key, $value);

    public function getAttribute($key);

    public function attributesToArray();

    public function getAttributes();

    public function relationsToArray();

    public function toCamelCase($attributes);

    public function getOriginal($key = null, $default = null);

    public function getTrueKey($key);

    public function isCamelCase();
}
