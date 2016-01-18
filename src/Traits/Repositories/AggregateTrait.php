<?php

namespace DraperStudio\Database\Traits\Repositories;

trait AggregateTrait
{
    public function count()
    {
        return $this->getModel()->count();
    }

    public function max($column)
    {
        return $this->getModel()->max($column);
    }

    public function min($column)
    {
        return $this->getModel()->min($column);
    }

    public function avg($column)
    {
        return $this->getModel()->avg($column);
    }

    public function sum($column)
    {
        return $this->getModel()->sum($column);
    }
}
