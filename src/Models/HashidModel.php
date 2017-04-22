<?php



declare(strict_types=1);



namespace BrianFaust\Database\Models;

use BrianFaust\Database\Behaviours\Hashid\HashidModel as HashidTrait;

abstract class HashidModel extends Model
{
    use HashidTrait;

    public $incrementing = false;
}
