<?php

namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class FSSSignalDiscovered implements EventInterface
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $systemAddress;

    /**
     * @var string
     */
    private $signalName;

    /**
     * @var string
     */
    private $signalNameLocalised;

    /**
     * @var bool
     */
    private $isStation;

    /**
     * FSSSignalDiscovered constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp           = new DateTimeImmutable($decoded['timestamp']);
        $this->signalName          = $decoded['SignalName'];
        $this->signalNameLocalised = $decoded['SignalName_Localised'] ?? $decoded['SignalName'];
        $this->systemAddress       = $decoded['SystemAddress'];
        $this->isStation           = $decoded['IsStation'] ?? false;
    }

    public function getEvent(): ?string
    {
        return 'FSSSignalDiscovered';
    }

    public function getSystemAddress(): string
    {
        return $this->systemAddress;
    }

    public function setSystemAddress(string $systemAddress): self
    {
        $this->systemAddress = $systemAddress;

        return $this;
    }

    public function getSignalName(): string
    {
        return $this->signalName;
    }

    public function setSignalName(string $signalName): self
    {
        $this->signalName = $signalName;

        return $this;
    }

    public function getSignalNameLocalised(): string
    {
        return $this->signalNameLocalised;
    }

    public function setSignalNameLocalised(string $signalNameLocalised): self
    {
        $this->signalNameLocalised = $signalNameLocalised;

        return $this;
    }

    public function isStation(): bool
    {
        return $this->isStation;
    }

    public function setIsStation(bool $isStation): self
    {
        $this->isStation = $isStation;

        return $this;
    }
}