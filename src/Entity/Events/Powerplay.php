<?php

namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Powerplay implements EventInterface
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $power;

    /**
     * @var int
     */
    private $rank;

    /**
     * @var int
     */
    private $merits;

    /**
     * @var int
     */
    private $votes;

    /**
     * @var int
     */
    private $timePledged;

    /**
     * Powerplay constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp   = new DateTimeImmutable($decoded['timestamp']);
        $this->power       = $decoded['Power'];
        $this->rank        = $decoded['Rank'];
        $this->merits      = $decoded['Merits'];
        $this->votes       = $decoded['Votes'];
        $this->timePledged = $decoded['TimePledged'];
    }

    public function getPower(): string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getMerits(): int
    {
        return $this->merits;
    }

    public function setMerits(int $merits): self
    {
        $this->merits = $merits;

        return $this;
    }

    public function getVotes(): int
    {
        return $this->votes;
    }

    public function setVotes(int $votes): self
    {
        $this->votes = $votes;

        return $this;
    }

    public function getTimePledged(): int
    {
        return $this->timePledged;
    }

    public function setTimePledged(int $timePledged): self
    {
        $this->timePledged = $timePledged;

        return $this;
    }

    public function getEvent(): ?string
    {
        return 'Powerplay';
    }
}