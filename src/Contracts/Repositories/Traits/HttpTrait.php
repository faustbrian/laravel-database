<?php

namespace DraperStudio\Database\Contracts\Repositories\Traits;

interface HttpTrait
{
    public function get($id, array $data);

    public function post(array $data);

    public function put($id, array $data);

    public function destroy($id, array $data);

    public function patch($id, array $data);
}
