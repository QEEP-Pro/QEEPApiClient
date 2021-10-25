<?php


namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;


abstract class AbstractModifier
{
    /**
     * @JMS\Type("integer")
     */

    private $id;

    /**
     * @JMS\Type("integer")
     * @var int
     */
    private $maxAmount;

    /**
     * @JMS\Type("integer")
     * @var int
     */
    private $minAmount;

    /**
     * @JMS\Type("integer")
     * @var int
     */
    private $defaultAmount;

    /**
     * @JMS\Type("string")
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $required;

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMaxAmount(): ?int
    {
        return $this->maxAmount;
    }

    public function setMaxAmount(int $maxAmount): self
    {
        $this->maxAmount = $maxAmount;

        return $this;
    }

    public function getMinAmount(): ?int
    {
        return $this->minAmount;
    }

    public function setMinAmount(int $minAmount): self
    {
        $this->minAmount = $minAmount;

        return $this;
    }

    public function getDefaultAmount(): ?int
    {
        return $this->defaultAmount;
    }

    public function setDefaultAmount(?int $defaultAmount): self
    {
        $this->defaultAmount = $defaultAmount;

        return $this;
    }

    public function isRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }

    public function getVariant(): Variant
    {
        return $this->variant;
    }

    public function setVariant(Variant $variant): self
    {
        $this->variant = $variant;

        return $this;
    }
}
