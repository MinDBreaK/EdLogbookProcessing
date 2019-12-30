<?php


namespace App\Entity\Events;


use DateTimeImmutable;

trait TimestampTrait
{
    /**
     * @var DateTimeImmutable
     */
    private $timestamp;

    public function getTimestamp(): ?DateTimeImmutable
    {
        return $this->timestamp;
    }
}