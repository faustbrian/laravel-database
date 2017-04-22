<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Traits\Repositories;

trait ControllerTrait
{
    public function index()
    {
        return $this->getModel()->all();
    }

    public function store(array $input)
    {
        return $this->getModel()->create($input);
    }

    public function show($id)
    {
        return $this->getModel()->find($id);
    }

    public function update($id, array $input)
    {
        return $this->getModel()->update($id, $input);
    }

    public function destroy($id)
    {
        return $this->getModel()->destroy($id);
    }
}
