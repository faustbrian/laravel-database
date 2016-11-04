<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface AggregateTrait
{
    public function count();

    public function max($column);

    public function min($column);

    public function avg($column);

    public function sum($column);
}
