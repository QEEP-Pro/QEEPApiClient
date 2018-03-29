<?php

namespace QEEP\QEEPApiClient\V2\Model;


class CompanyContacts
{
    /** @JMS\Type("string") */
    protected $key;

    /** @JMS\Type("string") */
    protected $value;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): CompanyContacts
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): CompanyContacts
    {
        $this->value = $value;

        return $this;
    }
}
