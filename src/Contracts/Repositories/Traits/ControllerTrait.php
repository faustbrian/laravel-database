<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

interface ControllerTrait
{
    public function index();

    public function store(array $input);

    public function show($id);

    public function update($id, array $input);

    public function destroy($id);
}
