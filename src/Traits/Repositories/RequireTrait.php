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

namespace Artisanry\Database\Traits\Repositories;

trait RequireTrait
{
    public function requireBy($column, $value, $columns = ['*'])
    {
        if (!$record = $this->findFirstBy($column, $value, $columns)) {
            $this->modelNotFound($this->getModel());
        }

        return $record;
    }

    public function requireById($id, $columns = ['*'])
    {
        return $this->requireBy('id', $id, $columns);
    }
}
