<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Commander implements EventInterface
{
    use TimestampTrait;
    use FidTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * Commander constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp = new DateTimeImmutable($decoded['timestamp']);
        $this->fid       = $decoded['FID'];
        $this->name      = $decoded['Name'];
    }

    public function getEvent(): ?string
    {
        return 'Commander';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}