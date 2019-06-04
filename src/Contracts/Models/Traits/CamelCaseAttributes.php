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

namespace Artisanry\Database\Contracts\Models\Traits;

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
