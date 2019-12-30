<?php


namespace App\Processor\Logbook;


use App\Entity\Event;
use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class EventLogbookProcessor
{
    public function processRawEvent(string $raw): void
    {
        $decoded = $this->decodeRawEvent($raw);

        if ($decoded === null) {
            return;
        }


        $decoded = $this->createEntityFromDecoded($decoded);
        
        dump($decoded);
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
            }
        }

        if ($event === null) {
            $event = new Event();
            try {
                $event->setEvent($decoded['event']);
                $event->setTimestamp(new DateTimeImmutable($decoded['timestamp']));
            } catch (Exception $e) {
                return null;
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