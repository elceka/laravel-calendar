<?php

namespace Acaronlex\LaravelCalendar;

use DateTime;

/**
 * Class SimpleEvent
 *
 * Simple DTO that implements the Event interface
 *
 * @package Acaronlex\LaravelCalendar
 */
class SimpleEvent implements IdentifiableEvent
{
    /**
     * @var string|int|null
     */
    public string|int|null $id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var bool
     */
    public bool $isAllDay;

    /**
     * @var DateTime
     */
    public DateTime $start;

    /**
     * @var DateTime
     */
    public string|DateTime $end;

    /**
     * @var array
     */
    private array $options;

    /**
     * @param string          $title
     * @param bool            $isAllDay
     * @param DateTime|string $start If string, must be valid datetime format: http://bit.ly/1z7QWbg
     * @param DateTime|string $end   If string, must be valid datetime format: http://bit.ly/1z7QWbg
     * @param int|string|null $id
     * @param array           $options
     *
     * @throws \Exception
     */
    public function __construct(string $title, bool $isAllDay, DateTime|string $start, DateTime|string $end, int|string $id = null, array $options = [])
    {
        $this->title    = $title;
        $this->isAllDay = $isAllDay;
        $this->start    = $start instanceof DateTime ? $start : new DateTime($start);
        $this->end      = $start instanceof DateTime ? $end : new DateTime($end);
        $this->id       = $id;
        $this->options  = $options;
    }

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId(): int|string|null
    {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay(): bool
    {
        return $this->isAllDay;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * Get the optional event options
     *
     * @return array
     */
    public function getEventOptions(): array
    {
        return $this->options;
    }
}
