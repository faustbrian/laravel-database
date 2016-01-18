<?php

namespace DraperStudio\Database\Contracts\Repositories;

interface Repository
{
    public function setModel($model);

    public function getModel();

    public function makeModel();
}
