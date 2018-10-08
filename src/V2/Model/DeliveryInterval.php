<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class DeliveryInterval
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("integer") */
    protected $timeFrom;

    /** @JMS\Type("integer") */
    protected $timeTo;

    /** @JMS\Type("integer") */
    protected $daysToPreOrder;

    /** @JMS\Type("integer") */
    protected $hoursToPreOrder;

    /** @JMS\Type("array<integer>") */
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

    public function getTimeFrom(): ?int
    {
        return $this->timeFrom;
    }

    public function setTimeFrom(int $timeFrom): DeliveryInterval
    {
        $this->timeFrom = $timeFrom;

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
