<?php


namespace App\Entity;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;

class Event implements EventInterface
{
    /**
     * @var DateTimeImmutable
     */
    private $timestamp;

    /**
     * @var string
     */
    private $event;

    public function getTimestamp(): ?DateTimeImmutable
    {
        return $this->timestamp;
    }

    public function setTimestamp(DateTimeImmutable $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }


}