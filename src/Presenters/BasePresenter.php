<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Presenters;

use Artisanry\Database\Contracts\Presenters\Traits\RoutesTrait as RoutesContract;
use Artisanry\Database\Traits\Presenters\DateTimeTrait;
use Artisanry\Database\Traits\Presenters\RoutesTrait;

class BasePresenter extends AbstractPresenter implements RoutesContract, DateTimeTrait
{
    use RoutesTrait;
    use DateTimeTrait;
}
