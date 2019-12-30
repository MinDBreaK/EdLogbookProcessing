<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Materials implements EventInterface
{
    use TimestampTrait;

    /**
     * @var array
     */
    private $raw;

    /**
     * @var array
     */
    private $manufactured;

    /**
     * @var array
     */
    private $encoded;

    /**
     * Materials constructor.
     * @param array $decoded
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp    = new DateTimeImmutable($decoded['timestamp']);
        $this->raw          = $decoded['Raw'] ?? [];
        $this->manufactured = $decoded['Manufactured'] ?? [];
        $this->encoded      = $decoded['Encoded'] ?? [];
    }

    public function getEvent(): ?string
    {
        return 'Materials';
    }

    public function getRaw(): array
    {
        return $this->raw;
    }

    public function setRaw(array $raw): self
    {
        $this->raw = $raw;

        return $this;
    }

    public function getManufactured(): array
    {
        return $this->manufactured;
    }

    public function setManufactured(array $manufactured): self
    {
        $this->manufactured = $manufactured;

        return $this;
    }

    public function getEncoded(): array
    {
        return $this->encoded;
    }

    public function setEncoded(array $encoded): self
    {
        $this->encoded = $encoded;

        return $this;
    }


}