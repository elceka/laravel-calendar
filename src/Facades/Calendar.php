<?php

namespace Elceka\LaravelCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Calendar
 *
 * @package Elceka\LaravelCalendar\Facades
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
