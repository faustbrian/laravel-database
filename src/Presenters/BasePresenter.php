<?php



declare(strict_types=1);



namespace BrianFaust\Database\Presenters;

use BrianFaust\Database\Contracts\Presenters\Traits\RoutesTrait as RoutesContract;
use BrianFaust\Database\Traits\Presenters\DateTimeTrait;
use BrianFaust\Database\Traits\Presenters\RoutesTrait;

class BasePresenter extends AbstractPresenter implements RoutesContract, DateTimeTrait
{
    use RoutesTrait;
    use DateTimeTrait;
}
