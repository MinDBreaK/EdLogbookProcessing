<?php


namespace App\Entity\Events;


use App\Entity\Interfaces\EventInterface;
use DateTimeImmutable;
use Exception;

class ReceiveText implements EventInterface
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $messageLocalised;

    /**
     * @var string
     */
    private $channel;

    /**
     * ReceiveText constructor.
     *
     * @param array $decoded
     *
     * @throws Exception
     */
    public function __construct(array $decoded)
    {
        $this->timestamp        = new DateTimeImmutable($decoded['timestamp']);
        $this->message          = $decoded['Message'];
        $this->from             = $decoded['From'];
        $this->messageLocalised = $decoded['Message_Localised'];
        $this->channel          = $decoded['Channel'];
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function setFrom(string $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMessageLocalised(): string
    {
        return $this->messageLocalised;
    }

    public function setMessageLocalised(string $messageLocalised): self
    {
        $this->messageLocalised = $messageLocalised;

        return $this;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel(string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getEvent(): ?string
    {
        return 'ReceiveText';
    }
}