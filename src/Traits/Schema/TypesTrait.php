<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Schema;

trait TypesTrait
{
    public function hashid($column)
    {
        return $this->char($column, 8);
    }

    public function uuid($column)
    {
        return $this->char($column, 36);
    }

    public function money($column)
    {
        return $this->decimal($column, 13, 4);
    }

    public function bcrypt($column)
    {
        return $this->string($column, 60);
    }

    public function ipaddr($column)
    {
        return $this->string($column, 45);
    }

    public function percentage($column)
    {
        return $this->decimal($column, 5, 2);
    }
}
