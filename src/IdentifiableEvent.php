<?php

namespace Elceka\LaravelCalendar;

/**
 * Interface IdentifiableEvent
 *
 * @package Elceka\LaravelCalendar
 */
interface IdentifiableEvent extends Event
{
    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId(): int|string|null;
}
