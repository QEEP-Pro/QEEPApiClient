<?php

namespace QEEP\QEEPApiClient\V2\Model\utils;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("all")
 */
class Point
{
    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("lat")
     * @JMS\Expose
     */
    private $lat;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("lng")
     * @JMS\Expose
     */
    private $lng;

    public function __construct(float $lat, float $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLng(): float
    {
        return $this->lng;
    }
}
