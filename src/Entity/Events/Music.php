<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Music implements EventInterface
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $musicTrack;

    /**
     * Music constructor.
     * @param array $decoded
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp  = new DateTimeImmutable($decoded['timestamp']);
        $this->musicTrack = $decoded['MusicTrack'];
    }

    public function getEvent(): ?string
    {
        return 'Music';
    }

    public function getMusicTrack(): string
    {
        return $this->musicTrack;
    }

    public function setMusicTrack(string $musicTrack): self
    {
        $this->musicTrack = $musicTrack;

        return $this;
    }

}