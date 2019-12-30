<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Progress implements EventInterface
{
    use TimestampTrait;

    /**
     * @var int
     */
    private $combat;

    /**
     * @var int
     */
    private $trade;

    /**
     * @var int
     */
    private $explore;

    /**
     * @var int
     */
    private $empire;

    /**
     * @var int
     */
    private $federation;

    /**
     * @var int
     */
    private $cqc;

    /**
     * Progress constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp  = new DateTimeImmutable($decoded['timestamp']);
        $this->combat     = (int)$decoded['Combat'];
        $this->trade      = (int)$decoded['Trade'];
        $this->explore    = (int)$decoded['Explore'];
        $this->empire     = (int)$decoded['Empire'];
        $this->federation = (int)$decoded['Federation'];
        $this->cqc        = (int)$decoded['CQC'];
    }

    public function getEvent(): ?string
    {
        return 'Progress';
    }

    public function getCombat(): int
    {
        return $this->combat;
    }

    public function setCombat(int $combat): self
    {
        $this->combat = $combat;

        return $this;
    }

    public function getTrade(): int
    {
        return $this->trade;
    }

    public function setTrade(int $trade): self
    {
        $this->trade = $trade;

        return $this;
    }

    public function getExplore(): int
    {
        return $this->explore;
    }

    public function setExplore(int $explore): self
    {
        $this->explore = $explore;

        return $this;
    }

    public function getEmpire(): int
    {
        return $this->empire;
    }

    public function setEmpire(int $empire): self
    {
        $this->empire = $empire;

        return $this;
    }

    public function getFederation(): int
    {
        return $this->federation;
    }

    public function setFederation(int $federation): self
    {
        $this->federation = $federation;

        return $this;
    }

    public function getCqc(): int
    {
        return $this->cqc;
    }

    public function setCqc(int $cqc): self
    {
        $this->cqc = $cqc;

        return $this;
    }
}