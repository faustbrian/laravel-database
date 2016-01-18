<?php

namespace DraperStudio\Database\Models;

use DraperStudio\Database\Contracts\Models\Traits\ScopesTrait as ScopesContract;
use DraperStudio\Database\Traits\Models\ScopesTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent implements ScopesContract
{
    use ScopesTrait;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
