<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Reputation implements EventInterface
{
    use TimestampTrait;

    /**
     * @var float
     */
    private $empire;

    /**
     * @var float
     */
    private $federation;

    /**
     * @var float
     */
    private $independent;

    /**
     * @var float
     */
    private $alliance;

    /**
     * Reputation constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp   = new DateTimeImmutable($decoded['timestamp']);
        $this->empire      = (float)$decoded['Empire'];
        $this->federation  = (float)$decoded['Federation'];
        $this->independent = (float)$decoded['Independent'];
        $this->alliance    = (float)$decoded['Alliance'];
    }


    public function getEvent(): ?string
    {
        return 'Reputation';
    }

    public function getEmpire(): float
    {
        return $this->empire;
    }

    public function setEmpire(float $empire): self
    {
        $this->empire = $empire;

        return $this;
    }

    public function getFederation(): float
    {
        return $this->federation;
    }

    public function setFederation(float $federation): self
    {
        $this->federation = $federation;

        return $this;
    }

    public function getIndependent(): float
    {
        return $this->independent;
    }

    public function setIndependent(float $independent): self
    {
        $this->independent = $independent;

        return $this;
    }

    public function getAlliance(): float
    {
        return $this->alliance;
    }

    public function setAlliance(float $alliance): self
    {
        $this->alliance = $alliance;

        return $this;
    }
}