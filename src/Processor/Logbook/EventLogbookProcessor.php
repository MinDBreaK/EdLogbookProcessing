<?php


namespace App\Processor\Logbook;


use App\Entity\Event;
use App\Entity\Interfaces\EventInterface;

class EventLogbookProcessor
{
    public function processRawEvent(string $raw): void
    {
        $decoded = $this->decodeRawEvent($raw);

        if ($decoded === null) {
            return;
        }

        $before = $decoded;
        $decoded = $this->createEntityFromDecoded($decoded);
        
        dump([$before, $decoded]);
    }

    private function decodeRawEvent(string $raw): ?array
    {
        return json_decode($raw, true);
    }

    private function createEntityFromDecoded(?array $decoded): ?EventInterface
    {
        $event = null;

        if (array_key_exists('event', $decoded)) {
            $class = $this->getEventClass($decoded['event']);

            if ($class !== Event::class) {
                $event = new $class($decoded);
            } else {
                $event = new Event($decoded);
            }
        }

        return $event;
    }

    private function getEventClass(string $eventName): string
    {
        $default   = Event::class;
        $candidate = "App\\Entity\\Events\\$eventName";

        if (class_exists($candidate)) {
            return $candidate;
        }

        return $default;
    }
}