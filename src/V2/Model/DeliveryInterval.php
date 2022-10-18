<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class DeliveryInterval
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("hourFrom")
     */
    protected $hourFrom;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("hourTo")
     */
    protected $hourTo;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timeFrom")
     */
    protected $timeFrom;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("timeTo")
     */
    protected $timeTo;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minuteFrom")
     */
    protected $minuteFrom;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("minuteTo")
     */
    protected $minuteTo;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("daysToPreOrder")
     */
    protected $daysToPreOrder;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("hoursToPreOrder")
     */
    protected $hoursToPreOrder;

    /**
     * @JMS\Type("array<integer>")
     * @JMS\SerializedName("daysOfWeek")
     */
    protected $daysOfWeek;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): DeliveryInterval
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): DeliveryInterval
    {
        $this->name = $name;

        return $this;
    }

    public function getHourFrom(): ?int
    {
        return $this->hourFrom;
    }

    public function setHourFrom(int $hourFrom): DeliveryInterval
    {
        $this->hourFrom = $hourFrom;

        return $this;
    }

    public function getHourTo(): ?int
    {
        return $this->hourTo;
    }

    public function setHourTo(int $hourTo): DeliveryInterval
    {
        $this->hourTo = $hourTo;

        return $this;
    }

    public function getMinuteFrom(): ?int
    {
        return $this->minuteFrom;
    }

    public function setMinuteFrom(int $minuteFrom): DeliveryInterval
    {
        $this->minuteFrom = $minuteFrom;

        return $this;
    }

    public function getMinuteTo(): ?int
    {
        return $this->minuteTo;
    }

    public function setMinuteTo(int $minuteTo): DeliveryInterval
    {
        $this->minuteTo = $minuteTo;

        return $this;
    }

    public function getTimeTo(): ?int
    {
        return $this->timeTo;
    }

    public function setTimeTo(int $timeTo): DeliveryInterval
    {
        $this->timeTo = $timeTo;

        return $this;
    }

    public function getTimeFrom(): ?int
    {
        return $this->timeFrom;
    }

    public function setTimeFrom(int $timeFrom): DeliveryInterval
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    public function getDaysToPreOrder(): ?int
    {
        return $this->daysToPreOrder;
    }

    public function setDaysToPreOrder(int $daysToPreOrder): DeliveryInterval
    {
        $this->daysToPreOrder = $daysToPreOrder;

        return $this;
    }

    public function getHoursToPreOrder(): ?int
    {
        return $this->hoursToPreOrder;
    }

    public function setHoursToPreOrder($hoursToPreOrder): DeliveryInterval
    {
        $this->hoursToPreOrder = $hoursToPreOrder;

        return $this;
    }

    public function getDaysOfWeek(): ?array
    {
        return $this->daysOfWeek;
    }

    public function setDaysOfWeek(array $daysOfWeek): DeliveryInterval
    {
        $this->daysOfWeek = $daysOfWeek;

        return $this;
    }
}
