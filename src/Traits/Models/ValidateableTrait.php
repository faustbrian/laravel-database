<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Models;

use Watson\Validating\ValidatingTrait;

trait ValidateableTrait
{
    use ValidatingTrait;

    protected $rules = [];

    protected $rulesets = [];

    public function getMessageBag()
    {
        return $this->getErrors();
    }
}
