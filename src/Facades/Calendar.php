<?php

namespace Acaronlex\LaravelCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Calendar
 *
 * @package Acaronlex\LaravelCalendar\Facades
 */
class Calendar extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-calendar';
    }
}
