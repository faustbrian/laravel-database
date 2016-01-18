<?php

namespace DraperStudio\Database\Traits\Repositories;

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
