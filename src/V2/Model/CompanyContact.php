<?php

namespace QEEP\QEEPApiClient\V2\Model;


class CompanyContact
{
    /** @JMS\Type("string") */
    protected $key;

    /** @JMS\Type("string") */
    protected $value;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): CompanyContact
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): CompanyContact
    {
        $this->value = $value;

        return $this;
    }
}
