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

interface HttpTrait
{
    public function get($id, array $data);

    public function post(array $data);

    public function put($id, array $data);

    public function destroy($id, array $data);

    public function patch($id, array $data);
}
