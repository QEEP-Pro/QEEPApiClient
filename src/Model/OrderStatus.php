<?php

namespace QEEP\QEEPApiClient\Model;

class OrderStatus
{
    protected $code;

    protected $value;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode($code): OrderStatus
    {
        $this->code = $code;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): OrderStatus
    {
        $this->value = $value;

        return $this;
    }
}
