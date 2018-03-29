<?php

namespace QEEP\QEEPApiClient\V2\Model;


use JMS\Serializer\Annotation as JMS;

class CompanyInfo
{
    /** @JMS\Type("string") */
    protected $key;

    /** @JMS\Type("string") */
    protected $value;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): CompanyInfo
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): CompanyInfo
    {
        $this->value = $value;

        return $this;
    }
}
