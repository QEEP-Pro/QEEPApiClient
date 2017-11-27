<?php

namespace QEEP\QEEPApiClient\Model;


class Setting
{
    private $key;

    private $value;

    public function getKey() : ?string
    {
        return $this->key;
    }

    public function setKey(string $key) : Setting
    {
        $this->key = $key;

        return $this;
    }

    public function getValue() : ?string
    {
        return $this->value;
    }

    public function setValue(string $value) : Setting
    {
        $this->value = $value;

        return $this;
    }
}