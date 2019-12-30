<?php


namespace App\Entity\Events;

use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class Fileheader implements EventInterface
{
    use TimestampTrait;

    /**
     * @var int
     */
    private $part;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $gameversion;

    /**
     * @var string
     */
    private $build;

    /**
     * Fileheader constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp   = new DateTimeImmutable($decoded['timestamp']);
        $this->part        = $decoded['part'];
        $this->language    = $decoded['language'];
        $this->gameversion = $decoded['gameversion'];
        $this->build       = $decoded['build'];
    }

    public function setTimestamp(DateTimeImmutable $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getEvent(): string
    {
        return 'Fileheader';
    }

    public function getPart(): int
    {
        return $this->part;
    }

    public function setPart(int $part): self
    {
        $this->part = $part;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getGameversion(): string
    {
        return $this->gameversion;
    }

    public function setGameversion(string $gameversion): self
    {
        $this->gameversion = $gameversion;

        return $this;
    }

    public function getBuild(): string
    {
        return $this->build;
    }

    public function setBuild(string $build): self
    {
        $this->build = $build;

        return $this;
    }


}