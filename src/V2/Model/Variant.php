<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class Variant
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("string") */
    protected $sku;

    /** @JMS\Type("integer") */
    protected $quantity;

    /** @JMS\Type("float") */
    protected $price;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Parameter>") */
    protected $parameters;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : Variant
    {
        $this->id = $id;

        return $this;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Variant
    {
        $this->name = $name;

        return $this;
    }

    public function getSku() : ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku) : Variant
    {
        $this->sku = $sku;

        return $this;
    }

    public function getQuantity() : ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity) : Variant
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price) : Variant
    {
        $this->price = $price;

        return $this;
    }

    public function getParameters() : ?array
    {
        return $this->parameters;
    }

    public function setParameters(array $parameters)  : Variant
    {
        $this->parameters = $parameters;

        return $this;
    }
}