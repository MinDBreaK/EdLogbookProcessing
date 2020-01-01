<?php

namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Missions implements EventInterface
{
    use TimestampTrait;

    /**
     * @var array
     */
    private $active;

    /**
     * @var array
     */
    private $failed;

    /**
     * @var array
     */
    private $complete;

    /**
     * Missions constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp = new DateTimeImmutable($decoded['timestamp']);
        $this->active    = $decoded['Active'];
        $this->failed    = $decoded['Failed'];
        $this->complete  = $decoded['Complete'];
    }

    public function getEvent(): ?string
    {
        return 'Missions';
    }

    public function getActive(): array
    {
        return $this->active;
    }

    public function setActive(array $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFailed(): array
    {
        return $this->failed;
    }

    public function setFailed(array $failed): self
    {
        $this->failed = $failed;

        return $this;
    }

    public function getComplete(): array
    {
        return $this->complete;
    }

    public function setComplete(array $complete): self
    {
        $this->complete = $complete;

        return $this;
    }
}