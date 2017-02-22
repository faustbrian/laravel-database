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

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Presenters;

use BrianFaust\Database\Contracts\Presenters\Traits\RoutesTrait as RoutesContract;
use BrianFaust\Database\Traits\Presenters\DateTimeTrait;
use BrianFaust\Database\Traits\Presenters\RoutesTrait;

class BasePresenter extends AbstractPresenter implements RoutesContract, DateTimeTrait
{
    use RoutesTrait;
    use DateTimeTrait;
}
