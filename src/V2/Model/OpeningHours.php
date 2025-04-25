<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class OpeningHours extends AbstractModifier
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("integer") */
    private $apiId;

    /** @JMS\Type("integer") */
    private $dayOfWeek;

    /** @JMS\Type("integer") */
    private $hourFrom;

    /** @JMS\Type("integer") */
    private $hourTo;

    /** @JMS\Type("integer") */
    private $minuteFrom;

    /** @JMS\Type("integer") */
    private $minuteTo;

    /** @JMS\Type("boolean") */
    private $closed;

    /**
     * @JMS\Type("QEEP\QEEPApiClient\V2\Model\PickupPoint")
     *
     * @var PickupPoint
     */
    protected $salesPoint;

    public function getDayOfWeek(): int
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(int $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getOpenHourFrom(): ?int
    {
        return $this->hourFrom;
    }

    public function setOpenHourFrom(int $hourFrom): OpeningHours
    {
        $this->hourFrom = $hourFrom;

        return $this;
    }

    public function getOpenHourTo(): ?int
    {
        return $this->hourTo;
    }

    public function setOpenHourTo(int $hourTo)
    {
        $this->hourTo = $hourTo;

        return $this;
    }

    public function getOpenMinuteFrom(): ?int
    {
        return $this->minuteFrom;
    }

    public function setOpenMinuteFrom(int $minuteFrom)
    {
        $this->minuteFrom = $minuteFrom;

        return $this;
    }

    public function getOpenMinuteTo(): ?int
    {
        return $this->minuteTo;
    }

    public function setOpenMinuteTo(int $minuteTo)
    {
        $this->minuteTo = $minuteTo;

        return $this;
    }

    public function isClosed(): bool
    {
        return $this->closed;
    }

    public function setClosed(bool $closed)
    {
        $this->closed = $closed;

        return $this;
    }

    public function getSalesPoint(): PickupPoint
    {
        return $this->salesPoint;
    }

    /**
     * @return $this
     */
    public function setSalesPoint(PickupPoint $salesPoint)
    {
        $this->salesPoint = $salesPoint;

        return $this;
    }
}
