<?php

namespace DraperStudio\Database\Presenters;

use DraperStudio\Database\Contracts\Presenters\Traits\RoutesTrait as RoutesContract;
use DraperStudio\Database\Traits\Presenters\DateTimeTrait;
use DraperStudio\Database\Traits\Presenters\RoutesTrait;

class BasePresenter extends AbstractPresenter implements RoutesContract, DateTimeTrait
{
    use RoutesTrait;
    use DateTimeTrait;
}
