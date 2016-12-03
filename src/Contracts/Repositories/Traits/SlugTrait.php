<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface SlugTrait
{
    public function findBySlug($slug, $columns = ['*']);

    public function requireBySlug($slug, $columns = ['*']);

    public function updateBySlug($slug, array $data);

    public function deleteBySlug($slug);
}
