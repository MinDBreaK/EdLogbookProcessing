<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class LoadGame implements EventInterface
{
    use TimestampTrait;
    use FidTrait;

    /**
     * @var string
     */
    private $commander;

    /**
     * @var bool
     */
    private $horizons;

    /**
     * @var string
     */
    private $ship;

    /**
     * @var string
     */
    private $shipLocalized;

    /**
     * @var int
     */
    private $shipId;

    /**
     * @var string
     */
    private $shipName;

    /**
     * @var string
     */
    private $shipIdent;

    /**
     * @var string
     */
    private $fuelLevel;

    /**
     * @var string
     */
    private $fuelCapacity;

    /**
     * @var string
     */
    private $gameMode;

    /**
     * @var int
     */
    private $credits;

    /**
     * @var int
     */
    private $loan;

    /**
     * LoadGame constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp     = new DateTimeImmutable($decoded['timestamp']);
        $this->fid           = $decoded['FID'];
        $this->commander     = $decoded['Commander'];
        $this->horizons      = (bool)$decoded['Horizons'];
        $this->ship          = $decoded['Ship'];
        $this->shipLocalized = $decoded['Ship_Localised'];
        $this->shipId        = $decoded['ShipID'];
        $this->shipName      = $decoded['ShipName'];
        $this->shipIdent     = $decoded['ShipIdent'];
        $this->fuelLevel     = $decoded['FuelLevel'];
        $this->fuelCapacity  = $decoded['FuelCapacity'];
        $this->gameMode      = $decoded['GameMode'];
        $this->credits       = $decoded['Credits'];
        $this->loan          = $decoded['Loan'];
    }

    public function getEvent(): ?string
    {
        return 'LoadGame';
    }

    public function getCommander(): string
    {
        return $this->commander;
    }

    public function setCommander(string $commander): self
    {
        $this->commander = $commander;

        return $this;
    }

    public function isHorizons(): bool
    {
        return $this->horizons;
    }

    public function setHorizons(bool $horizons): self
    {
        $this->horizons = $horizons;

        return $this;
    }

    public function getShip(): string
    {
        return $this->ship;
    }

    public function setShip(string $ship): self
    {
        $this->ship = $ship;

        return $this;
    }

    public function getShipLocalized(): string
    {
        return $this->shipLocalized;
    }

    public function setShipLocalized(string $shipLocalized): self
    {
        $this->shipLocalized = $shipLocalized;

        return $this;
    }

    public function getShipId(): int
    {
        return $this->shipId;
    }

    public function setShipId(int $shipId): self
    {
        $this->shipId = $shipId;

        return $this;
    }

    public function getShipName(): string
    {
        return $this->shipName;
    }

    public function setShipName(string $shipName): self
    {
        $this->shipName = $shipName;

        return $this;
    }

    public function getShipIdent(): string
    {
        return $this->shipIdent;
    }

    public function setShipIdent(string $shipIdent): self
    {
        $this->shipIdent = $shipIdent;

        return $this;
    }

    public function getFuelLevel(): string
    {
        return $this->fuelLevel;
    }

    public function setFuelLevel(string $fuelLevel): self
    {
        $this->fuelLevel = $fuelLevel;

        return $this;
    }

    public function getFuelCapacity(): string
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(string $fuelCapacity): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    public function getGameMode(): string
    {
        return $this->gameMode;
    }

    public function setGameMode(string $gameMode): self
    {
        $this->gameMode = $gameMode;

        return $this;
    }

    public function getCredits(): int
    {
        return $this->credits;
    }

    public function setCredits(int $credits): self
    {
        $this->credits = $credits;

        return $this;
    }

    public function getLoan(): int
    {
        return $this->loan;
    }

    public function setLoan(int $loan): self
    {
        $this->loan = $loan;

        return $this;
    }
}