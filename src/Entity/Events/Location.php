<?php

namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Location implements EventInterface
{
    use TimestampTrait;

    /**
     * @var bool
     */
    private $docked;

    /**
     * @var string
     */
    private $stationName;

    /**
     * @var string
     */
    private $stationType;

    /**
     * @var int|null
     */
    private $marketId;

    /**
     * @var array
     */
    private $stationFaction;

    /**
     * @var string
     */
    private $stationGovernment;

    /**
     * @var string
     */
    private $stationGovernmentLocalised;

    /**
     * @var string
     */
    private $stationAllegiance;

    /**
     * @var string[]
     */
    private $stationServices;

    /**
     * @var string
     */
    private $stationEconomy;

    /**
     * @var string
     */
    private $stationEconomyLocalised;

    /**
     * @var array
     */
    private $stationEconomies;

    /**
     * @var string
     */
    private $starSystem;

    /**
     * @var int
     */
    private $systemAddress;

    /**
     * @var float[]
     */
    private $starPos;

    /**
     * @var string
     */
    private $systemAllegiance;

    /**
     * @var string
     */
    private $systemEconomy;

    /**
     * @var string
     */
    private $systemEconomyLocalised;

    /**
     * @var string
     */
    private $systemSecondEconomy;

    /**
     * @var string
     */
    private $systemSecondEconomyLocalised;

    /**
     * @var string
     */
    private $systemGovernment;

    /**
     * @var string
     */
    private $systemGovernmentLocalised;

    /**
     * @var string
     */
    private $systemSecurity;

    /**
     * @var string
     */
    private $systemSecurityLocalised;

    /**
     * @var int
     */
    private $population;

    /**
     * @var string
     */
    private $body;

    /**
     * @var int
     */
    private $bodyId;

    /**
     * @var string
     */
    private $bodyType;

    /**
     * @var array
     */
    private $powers;

    /**
     * @var string
     */
    private $powerplayState;

    /**
     * @var array
     */
    private $factions;

    /**
     * @var array
     */
    private $systemFactions;

    /**
     * @var array
     */
    private $conflicts;

    /**
     * Location constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp = new DateTimeImmutable($decoded['timestamp']);
        $this->docked    = $decoded['Docked'] ?? false;
        $this->marketId  = $decoded['MarketID'] ?? null;

        $this->stationName                = $decoded['StationName'] ?? '';
        $this->stationType                = $decoded['StationType'] ?? '';
        $this->stationFaction             = $decoded['StationFaction'] ?? [];
        $this->stationGovernment          = $decoded['StationGoverment'] ?? '';
        $this->stationGovernmentLocalised = $decoded['StationGovernment_Localised'] ?? '';
        $this->stationAllegiance          = $decoded['StationAllegiance'] ?? '';
        $this->stationServices            = $decoded['StationServices'] ?? [];
        $this->stationEconomy             = $decoded['StationEconomy'] ?? '';
        $this->stationEconomyLocalised    = $decoded['StationEconomy_Localised'] ?? '';
        $this->stationEconomies           = $decoded['StationEconomies'] ?? [];

        $this->starSystem                   = $decoded['StarSystem'];
        $this->starPos                      = $decoded['StarPos'];
        $this->systemAddress                = $decoded['SystemAddress'];
        $this->systemAllegiance             = $decoded['SystemAllegiance'];
        $this->systemEconomy                = $decoded['SystemEconomy'];
        $this->systemEconomyLocalised       = $decoded['SystemEconomy_Localised'];
        $this->systemSecondEconomy          = $decoded['SystemSecondEconomy'];
        $this->systemSecondEconomyLocalised = $decoded['SystemSecondEconomy_Localised'];
        $this->systemGovernment             = $decoded['SystemGovernment'];
        $this->systemGovernmentLocalised    = $decoded['SystemGovernment_Localised'];
        $this->systemSecurity               = $decoded['SystemSecurity'];
        $this->systemSecurityLocalised      = $decoded['SystemSecurity_Localised'];
        $this->population                   = $decoded['Population'];

        $this->body     = $decoded['Body'];
        $this->bodyId   = $decoded['BodyID'];
        $this->bodyType = $decoded['BodyType'];

        $this->powers         = $decoded['Powers'];
        $this->powerplayState = $decoded['PowerplayState'];
        $this->factions       = $decoded['Factions'];
        $this->systemFactions = $decoded['SystemFactions'] ?? [];
        $this->conflicts      = $decoded['Conflics'] ?? [];
    }

    public function getEvent(): ?string
    {
        return 'Location';
    }

    public function isDocked(): bool
    {
        return $this->docked;
    }

    public function setDocked(bool $docked): self
    {
        $this->docked = $docked;

        return $this;
    }

    public function getStationName(): string
    {
        return $this->stationName;
    }

    public function setStationName(string $stationName): self
    {
        $this->stationName = $stationName;

        return $this;
    }

    public function getStationType(): string
    {
        return $this->stationType;
    }

    public function setStationType(string $stationType): self
    {
        $this->stationType = $stationType;

        return $this;
    }

    public function getMarketId(): ?int
    {
        return $this->marketId;
    }

    public function setMarketId(?int $marketId): self
    {
        $this->marketId = $marketId;

        return $this;
    }

    public function getStationFaction(): array
    {
        return $this->stationFaction;
    }

    public function setStationFaction(array $stationFaction): self
    {
        $this->stationFaction = $stationFaction;

        return $this;
    }

    public function getStationGovernment(): string
    {
        return $this->stationGovernment;
    }

    public function setStationGovernment(string $stationGovernment): self
    {
        $this->stationGovernment = $stationGovernment;

        return $this;
    }

    public function getStationGovernmentLocalised(): string
    {
        return $this->stationGovernmentLocalised;
    }

    public function setStationGovernmentLocalised(string $stationGovernmentLocalised): self
    {
        $this->stationGovernmentLocalised = $stationGovernmentLocalised;

        return $this;
    }

    public function getStationAllegiance(): string
    {
        return $this->stationAllegiance;
    }

    public function setStationAllegiance(string $stationAllegiance): self
    {
        $this->stationAllegiance = $stationAllegiance;

        return $this;
    }

    public function getStationServices(): array
    {
        return $this->stationServices;
    }

    public function setStationServices(array $stationServices): self
    {
        $this->stationServices = $stationServices;

        return $this;
    }

    public function getStationEconomy(): string
    {
        return $this->stationEconomy;
    }

    public function setStationEconomy(string $stationEconomy): self
    {
        $this->stationEconomy = $stationEconomy;

        return $this;
    }

    public function getStationEconomyLocalised(): string
    {
        return $this->stationEconomyLocalised;
    }

    public function setStationEconomyLocalised(string $stationEconomyLocalised): self
    {
        $this->stationEconomyLocalised = $stationEconomyLocalised;

        return $this;
    }

    public function getStationEconomies(): array
    {
        return $this->stationEconomies;
    }

    public function setStationEconomies(array $stationEconomies): self
    {
        $this->stationEconomies = $stationEconomies;

        return $this;
    }

    public function getStarSystem(): string
    {
        return $this->starSystem;
    }

    public function setStarSystem(string $starSystem): self
    {
        $this->starSystem = $starSystem;

        return $this;
    }

    public function getSystemAddress(): int
    {
        return $this->systemAddress;
    }

    public function setSystemAddress(int $systemAddress): self
    {
        $this->systemAddress = $systemAddress;

        return $this;
    }

    public function getStarPos(): array
    {
        return $this->starPos;
    }

    public function setStarPos(array $starPos): self
    {
        $this->starPos = $starPos;

        return $this;
    }

    public function getSystemAllegiance(): string
    {
        return $this->systemAllegiance;
    }

    public function setSystemAllegiance(string $systemAllegiance): self
    {
        $this->systemAllegiance = $systemAllegiance;

        return $this;
    }

    public function getSystemEconomy(): string
    {
        return $this->systemEconomy;
    }

    public function setSystemEconomy(string $systemEconomy): self
    {
        $this->systemEconomy = $systemEconomy;

        return $this;
    }

    public function getSystemEconomyLocalised(): string
    {
        return $this->systemEconomyLocalised;
    }

    public function setSystemEconomyLocalised(string $systemEconomyLocalised): self
    {
        $this->systemEconomyLocalised = $systemEconomyLocalised;

        return $this;
    }

    public function getSystemSecondEconomy(): string
    {
        return $this->systemSecondEconomy;
    }

    public function setSystemSecondEconomy(string $systemSecondEconomy): self
    {
        $this->systemSecondEconomy = $systemSecondEconomy;

        return $this;
    }

    public function getSystemSecondEconomyLocalised(): string
    {
        return $this->systemSecondEconomyLocalised;
    }

    public function setSystemSecondEconomyLocalised(string $systemSecondEconomyLocalised): self
    {
        $this->systemSecondEconomyLocalised = $systemSecondEconomyLocalised;

        return $this;
    }

    public function getSystemGovernment(): string
    {
        return $this->systemGovernment;
    }

    public function setSystemGovernment(string $systemGovernment): self
    {
        $this->systemGovernment = $systemGovernment;

        return $this;
    }

    public function getSystemGovernmentLocalised(): string
    {
        return $this->systemGovernmentLocalised;
    }

    public function setSystemGovernmentLocalised(string $systemGovernmentLocalised): self
    {
        $this->systemGovernmentLocalised = $systemGovernmentLocalised;

        return $this;
    }

    public function getSystemSecurity(): string
    {
        return $this->systemSecurity;
    }

    public function setSystemSecurity(string $systemSecurity): self
    {
        $this->systemSecurity = $systemSecurity;

        return $this;
    }

    public function getSystemSecurityLocalised(): string
    {
        return $this->systemSecurityLocalised;
    }

    public function setSystemSecurityLocalised(string $systemSecurityLocalised): self
    {
        $this->systemSecurityLocalised = $systemSecurityLocalised;

        return $this;
    }

    public function getPopulation(): int
    {
        return $this->population;
    }

    public function setPopulation(int $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getBodyId(): int
    {
        return $this->bodyId;
    }

    public function setBodyId(int $bodyId): self
    {
        $this->bodyId = $bodyId;

        return $this;
    }

    public function getBodyType(): string
    {
        return $this->bodyType;
    }

    public function setBodyType(string $bodyType): self
    {
        $this->bodyType = $bodyType;

        return $this;
    }

    public function getPowers(): array
    {
        return $this->powers;
    }

    public function setPowers(array $powers): self
    {
        $this->powers = $powers;

        return $this;
    }

    public function getPowerplayState(): string
    {
        return $this->powerplayState;
    }

    public function setPowerplayState(string $powerplayState): self
    {
        $this->powerplayState = $powerplayState;

        return $this;
    }

    public function getFactions(): array
    {
        return $this->factions;
    }

    public function setFactions(array $factions): self
    {
        $this->factions = $factions;

        return $this;
    }

    public function getSystemFactions(): array
    {
        return $this->systemFactions;
    }

    public function setSystemFactions(array $systemFactions): self
    {
        $this->systemFactions = $systemFactions;

        return $this;
    }

    public function getConflicts(): array
    {
        return $this->conflicts;
    }

    public function setConflicts(array $conflicts): self
    {
        $this->conflicts = $conflicts;

        return $this;
    }
}