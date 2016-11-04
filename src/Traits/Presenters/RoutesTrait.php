<?php

namespace BrianFaust\Database\Traits\Presenters;

trait RoutesTrait
{
    public function createRoute()
    {
        return route($this->routeName('create'));
    }

    public function showRoute()
    {
        return route($this->routeName('show'), $this->{$this->routeModelIdentifier()});
    }

    public function editRoute()
    {
        return route($this->routeName('edit'), $this->{$this->routeModelIdentifier()});
    }

    public function deleteRoute()
    {
        return route($this->routeName('delete'), $this->{$this->routeModelIdentifier()});
    }

    public function listRoute()
    {
        return route($this->routeName('list'));
    }

    public function routeModelIdentifier()
    {
        return 'id';
    }

    public function routeNamePrefix()
    {
        return 'prefix';
    }

    public function routeNames()
    {
        $prefix = $this->routeNamePrefix();

        return [
            'create' => $prefix.'.create',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'delete' => $prefix.'.delete',
            'list' => $prefix.'.list',
        ];
    }

    private function routeName($key)
    {
        return $this->routeNames()[$key];
    }
}
