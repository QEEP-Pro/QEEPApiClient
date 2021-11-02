<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class GroupModifier extends AbstractModifier
{
    /**
     * @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Variant>")
     */
    private $modifiers;

    public function __construct()
    {
        $this->modifiers = [];
    }

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function setModifiers($modifiers): self
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    public function addModifier(Variant $modifier): self
    {
        if (!in_array($modifier, $this->modifiers)) {
            array_push($this->modifiers, $modifier);
        }

        return $this;
    }

    public function isRequired(): bool
    {
        return $this->getMinAmount() > 0;
    }
}
