<?php



declare(strict_types=1);



namespace BrianFaust\Database\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException as NotFoundException;

class ModelNotFoundException extends NotFoundException
{
}
