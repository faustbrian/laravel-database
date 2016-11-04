<?php

namespace BrianFaust\Database\Contracts\Presenters\Traits;

interface DateTimeTrait
{
    public function createdAt();

    public function updatedAt();

    public function deletedAt();
}
