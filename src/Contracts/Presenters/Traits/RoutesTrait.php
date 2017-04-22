<?php



declare(strict_types=1);



namespace BrianFaust\Database\Contracts\Presenters\Traits;

interface RoutesTrait
{
    public function createRoute();

    public function showRoute();

    public function editRoute();

    public function deleteRoute();

    public function listRoute();

    public function routeModelIdentifier();

    public function routeNamePrefix();

    public function routeNames();
}
