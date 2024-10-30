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

    /**
     * @JMS\SerializedName("groupModifiers")
     * @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\GroupModifier>")
     * @var GroupModifier[]
     */
    protected $groupModifiers;

    /**
     * @JMS\Type("integer")
     * @var int|null
     * */
    protected $weight;

    /**
     * @JMS\Type("integer")
     * @var int|null
     * */
    protected $position;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Variant
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Variant
    {
        $this->name = $name;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): Variant
    {
        $this->sku = $sku;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): Variant
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): Variant
    {
        $this->price = $price;

        return $this;
    }

    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    public function setParameters(array $parameters): Variant
    {
        $this->parameters = $parameters;

        return $this;
    }
    /**
     * @return GroupModifier[]
     */
    public function getGroupModifiers(): array
    {
        return $this->groupModifiers;
    }

    /**
     * @param GroupModifier[] $groupModifiers
     * @return Variant
     */
    public function setGroupModifiers(array $groupModifiers): Variant
    {
        $this->groupModifiers = $groupModifiers;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }
}
