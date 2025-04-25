<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class StopList
{
    /** @JMS\Type("integer") */
    private $id;

    /** @JMS\Type("string") */
    private $name;

    /** @JMS\Type("integer") */
    private $hourFrom;

    /** @JMS\Type("integer") */
    private $hourTo;

    /** @JMS\Type("integer") */
    private $minuteFrom;

    /** @JMS\Type("integer") */
    private $minuteTo;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Variant>") */
    private $variants;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\PickupPoint>") */
    private $pickupPoints;

    /** @JMS\Type("boolean") */
    private $active = false;

    public function __construct()
    {
        $this->variants = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): StopList
    {
        $this->name = $name;

        return $this;
    }

    public function getVariants(): array
    {
        return $this->variants;
    }

    public function setVariants(array $variants): StopList
    {
        $this->variants = $variants;

        return $this;
    }

    public function getPickupPoints()
    {
        return $this->pickupPoints;
    }

    public function setPickupPoints(array $pickupPoints): StopList
    {
        $this->pickupPoints = $pickupPoints;

        return $this;
    }

    public function getMinuteTo(): int
    {
        return $this->minuteTo;
    }

    public function setMinuteTo($minuteTo): StopList
    {
        $this->minuteTo = $minuteTo;

        return $this;
    }

    public function getMinuteFrom(): int
    {
        return $this->minuteFrom;
    }

    public function setMinuteFrom($minuteFrom): StopList
    {
        $this->minuteFrom = $minuteFrom;

        return $this;
    }

    public function getHourTo(): int
    {
        return $this->hourTo;
    }

    public function setHourTo($hourTo): StopList
    {
        $this->hourTo = $hourTo;

        return $this;
    }

    public function getHourFrom(): int
    {
        return $this->hourFrom;
    }

    public function setHourFrom($hourFrom): StopList
    {
        $this->hourFrom = $hourFrom;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
