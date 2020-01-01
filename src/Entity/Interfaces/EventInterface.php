<?php


namespace App\Entity\Interfaces;


use DateTimeImmutable;

interface EventInterface
{
    public function __construct(array $decoded);

    public function getEvent(): ?string;

    public function getTimestamp(): ?DateTimeImmutable;
}