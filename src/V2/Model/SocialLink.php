<?php

namespace QEEP\QEEPApiClient\V2\Model;


class SocialLink
{
    /** @JMS\Type("string") */
    protected $key;

    /** @JMS\Type("string") */
    protected $value;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): SocialLink
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): SocialLink
    {
        $this->value = $value;

        return $this;
    }
}