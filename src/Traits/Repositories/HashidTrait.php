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

trait HashidTrait
{
    public function findByHashid($hashid, $columns = ['*'])
    {
        return $this->findFirstBy('hashid', $hashid, $columns);
    }

    public function requireByHashid($hashid, $columns = ['*'])
    {
        if (!$record = $this->findByHashid($hashid, $columns)) {
            $this->modelNotFound($this->model);
        }

        return $record;
    }

    public function updateByHashid($hashid, array $data)
    {
        $model = $this->requireByHashid($hashid);

        return $this->updateModel($model, $data);
    }

    public function deleteByHashid($hashid)
    {
        return $this->findByHashid($hashid)->delete();
    }
}
