<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface BuilderTrait
{
    public function getNew(array $attributes = []);

    public function with($relations);

    public function withLazy($relations);
}
