<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class Parameter
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("integer") */
    protected $position;

    /** @JMS\Type("string") */
    protected $characteristic;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Parameter
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Parameter
    {
        $this->name = $name;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): Parameter
    {
        $this->position = $position;

        return $this;
    }

    public function getCharacteristic(): ?string
    {
        return $this->characteristic;
    }

    public function setCharacteristic(?string $characteristic): Parameter
    {
        $this->characteristic = $characteristic;

        return $this;
    }
}
