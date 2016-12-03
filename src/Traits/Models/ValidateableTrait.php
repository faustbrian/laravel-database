<?php

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
