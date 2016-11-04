<?php

namespace BrianFaust\Database\Traits\Models;

trait PresentableTrait
{
    protected $presenterInstance;

    public function present()
    {
        if (!$this->presenterInstance) {
            $presenterClass = $this->getPresenterClass();

            $this->presenterInstance = new $presenterClass($this);
        }

        return $this->presenterInstance;
    }

    abstract public function getPresenterClass();
}
