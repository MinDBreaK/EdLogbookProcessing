<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class EngineerProgress implements EventInterface
{
    use TimestampTrait;

    /**
     * @var array
     */
    private $engineers;

    /**
     * EngineerProgress constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp = new DateTimeImmutable($decoded['timestamp']);
        $this->engineers = $decoded['Engineers'];
    }

    public function getEvent(): ?string
    {
        return 'EngineerProgress';
    }

    public function getEngineers(): array
    {
        return $this->engineers;
    }

    public function setEngineers(array $engineers): self
    {
        $this->engineers = $engineers;

        return $this;
    }
}