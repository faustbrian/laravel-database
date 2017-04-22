<?php



declare(strict_types=1);



namespace BrianFaust\Database\Models;

use BrianFaust\Database\Contracts\Models\Traits\ScopesTrait as ScopesContract;
use BrianFaust\Database\Traits\Models\ScopesTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent implements ScopesContract
{
    use ScopesTrait;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
