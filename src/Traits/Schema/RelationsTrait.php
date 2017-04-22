<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Schema;

trait RelationsTrait
{
    public function hasAndBelongsToMany($name, $indexName = null)
    {
        return $this->morphs($name, $indexName = null);
    }
}
