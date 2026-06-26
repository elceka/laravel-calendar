<?php

namespace Elceka\LaravelCalendar;

use Illuminate\Support\Collection;

/**
 * Class EventCollection
 *
 * @package Elceka\LaravelCalendar
 */
class EventCollection
{
    /**
     * @var Collection
     */
    protected Collection $events;

    /**
     *
     */
    public function __construct()
    {
        $this->events = new Collection();
    }

    /**
     * @param \Elceka\LaravelCalendar\Event $event
     * @param array                            $customAttributes
     *
     * @return void
     */
    public function push(Event $event, array $customAttributes = []): void
    {
        $this->events->push($this->convertToArray($event, $customAttributes));
    }

    /**
     * @return mixed
     */
    public function toJson(): mixed
    {
        return $this->events->toJson();
    }

    /**
     * @return mixed
     */
    public function toArray(): mixed
    {
        return $this->events->toArray();
    }

    /**
     * @param \Elceka\LaravelCalendar\Event $event
     * @param array                            $customAttributes
     *
     * @return array
     */
    private function convertToArray(Event $event, array $customAttributes = []): array
    {
        $eventArray = [
            'id' => $this->getEventId($event),
            'title' => $event->getTitle(),
            'allDay' => $event->isAllDay(),
            'start' => $event->getStart()->format('c'),
            'end' => $event->getEnd()->format('c'),
        ];

        $eventOptions = method_exists($event, 'getEventOptions') ? $event->getEventOptions() : [];

        return array_merge($eventArray, $eventOptions, $customAttributes);
    }

    /**
     * @param \Elceka\LaravelCalendar\Event $event
     *
     * @return int|string|null
     */
    private function getEventId(Event $event): int|string|null
    {
        if ($event instanceof IdentifiableEvent) {
            return $event->getId();
        }

        return null;
    }
}
