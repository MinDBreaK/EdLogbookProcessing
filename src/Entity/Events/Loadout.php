<?php

namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Loadout implements EventInterface
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $ship;

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
     * @var int
     */
    private $hullValue;

    /**
     * @var int
     */
    private $modulesValues;

    /**
     * @var float
     */
    private $hullHealth;

    /**
     * @var float
     */
    private $unladenMass;

    /**
     * @var int
     */
    private $cargoCapacity;

    /**
     * @var float
     */
    private $maxJumpRange;

    /**
     * @var array["Main" => float, "Reserve" => float]
     */
    private $fuelCapacity;

    /**
     * @var int
     */
    private $rebuy;

    /**
     * @var array
     */
    private $modules;

    /**
     * Loadout constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp  = new DateTimeImmutable($decoded['timestamp']);
        $this->ship          = $decoded['Ship'];
        $this->shipId        = $decoded['ShipID'];
        $this->shipName      = $decoded['ShipName'];
        $this->shipIdent     = $decoded['ShipIdent'];
        $this->hullValue     = $decoded['HullValue'];
        $this->modulesValues = $decoded['ModulesValue'];
        $this->hullHealth    = $decoded['HullHealth'];
        $this->unladenMass   = $decoded['UnladenMass'];
        $this->cargoCapacity = $decoded['CargoCapacity'];
        $this->maxJumpRange  = $decoded['MaxJumpRange'];
        $this->fuelCapacity  = $decoded['FuelCapacity'];
        $this->rebuy         = $decoded['Rebuy'];
        $this->modules       = $decoded['Modules'];
    }

    public function getEvent(): ?string
    {
        return 'Loadout';
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

    public function getHullValue(): int
    {
        return $this->hullValue;
    }

    public function setHullValue(int $hullValue): self
    {
        $this->hullValue = $hullValue;

        return $this;
    }

    public function getModulesValues(): int
    {
        return $this->modulesValues;
    }

    public function setModulesValues(int $modulesValues): self
    {
        $this->modulesValues = $modulesValues;

        return $this;
    }

    public function getHullHealth(): float
    {
        return $this->hullHealth;
    }

    public function setHullHealth(float $hullHealth): self
    {
        $this->hullHealth = $hullHealth;

        return $this;
    }

    public function getUnladenMass(): float
    {
        return $this->unladenMass;
    }

    public function setUnladenMass(float $unladenMass): self
    {
        $this->unladenMass = $unladenMass;

        return $this;
    }

    public function getCargoCapacity(): int
    {
        return $this->cargoCapacity;
    }

    public function setCargoCapacity(int $cargoCapacity): self
    {
        $this->cargoCapacity = $cargoCapacity;

        return $this;
    }

    public function getMaxJumpRange(): float
    {
        return $this->maxJumpRange;
    }

    public function setMaxJumpRange(float $maxJumpRange): self
    {
        $this->maxJumpRange = $maxJumpRange;

        return $this;
    }

    public function getFuelCapacity(): array
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(array $fuelCapacity): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    public function getRebuy(): int
    {
        return $this->rebuy;
    }

    public function setRebuy(int $rebuy): self
    {
        $this->rebuy = $rebuy;

        return $this;
    }

    public function getModules(): array
    {
        return $this->modules;
    }

    public function setModules(array $modules): self
    {
        $this->modules = $modules;

        return $this;
    }
}