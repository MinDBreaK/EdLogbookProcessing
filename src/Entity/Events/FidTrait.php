<?php


namespace App\Entity\Events;


trait FidTrait
{
    /**
     * Frontier ID
     *
     * @var string
     */
    private $fid;

    public function getFid(): string
    {
        return $this->fid;
    }

    public function setFid(string $fid): self
    {
        $this->fid = $fid;

        return $this;
    }
}