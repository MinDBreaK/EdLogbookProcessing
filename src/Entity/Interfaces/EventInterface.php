<?php


namespace App\Entity\Interfaces;


use DateTimeImmutable;

interface EventInterface
{
    public function getEvent(): ?string;

    public function getTimestamp(): ?DateTimeImmutable;
}