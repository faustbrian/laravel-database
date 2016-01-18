<?php

namespace DraperStudio\Database\Contracts\Repositories\Traits;

interface BuilderTrait
{
    public function getNew(array $attributes = []);

    public function with($relations);

    public function withLazy($relations);
}
