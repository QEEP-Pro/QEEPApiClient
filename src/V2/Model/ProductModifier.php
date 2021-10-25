<?php

namespace QEEP\QEEPApiClient\V2\Model;

class ProductModifier extends AbstractModifier
{
    /**
     * @var Variant Продукт, который будет использоваться в качестве модификатора (все модификаторы — стандартные продукты)
     */
    private $modifier;

    public function getModifier(): Variant
    {
        return $this->modifier;
    }

    public function setModifier(Variant $modifier): self
    {
        $this->modifier = $modifier;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->modifier->getName();
    }

    public function getPrice()
    {
        return $this->modifier->getPrice();
    }
}
