<?php

namespace QEEP\QEEPApiClient\Model;


use JMS\Serializer\Annotation as JMS;

class Brand
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : Brand
    {
        $this->id = $id;

        return $this;
    }

    // QEEP-Pro отдает `code` вместо `id`

    public function setCode(?string $code) : Brand
    {
        $this->id = $code;

        return $this;
    }

    public function getCode() : ?int
    {
        return $this->id;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Brand
    {
        $this->name = $name;

        return $this;
    }
// QEEP-Pro отдает `value` вместо `name`

    public function setValue(?string $value) : Brand
    {
        $this->name = $value;

        return $this;
    }

    public function getValue() : ?string
    {
        return $this->name;
    }

}