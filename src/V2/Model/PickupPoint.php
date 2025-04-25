<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;
use QEEP\QEEPApiClient\V2\Model\utils\Point;

class PickupPoint
{
    /** @JMS\Type("integer") */
    private $id;

    /** @JMS\Type("integer") */
    private $apiId;

    /** @JMS\Type("string") */
    private $name;

    /** @JMS\Type("string") */
    private $address;

    /** @JMS\Type("integer") */
    private $position;

    /** @JMS\Type("QEEP\QEEPApiClient\V2\Model\utils\Point") */
    private $point;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\OpeningHours>") */
    private $openingHours;

    /** @JMS\Type("string")  */
    private $phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApiId(): ?int
    {
        return $this->apiId;
    }

    public function setApiId(int $apiId): PickupPoint
    {
        $this->apiId = $apiId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): PickupPoint
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): PickupPoint
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return array|OpeningHours[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }

    /**
     * @param array|OpeningHours[]|null $openingHours
     */
    public function setOpeningHours(?array $openingHours): PickupPoint
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): PickupPoint
    {
        $this->position = $position;

        return $this;
    }

    public function getPoint(): ?Point
    {
        return $this->point;
    }

    public function setPoint(Point $point): PickupPoint
    {
        $this->point = $point;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
