<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface SlugTrait
{
    public function findBySlug($slug, $columns = ['*']);

    public function requireBySlug($slug, $columns = ['*']);

    public function updateBySlug($slug, array $data);

    public function deleteBySlug($slug);
}
