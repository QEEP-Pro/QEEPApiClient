<?php

namespace QEEP\QEEPApiClient\V2\Model;


use JMS\Serializer\Annotation as JMS;

class Brand
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("string") */
    protected $description;

    /** @JMS\Type("string") */
    protected $image;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : Brand
    {
        $this->id = $id;

        return $this;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Brand
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription() :  ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description) : Brand
    {
        $this->description = $description;

        return $this;
    }

    public function getImage() : ?string
    {
        return $this->image;
    }

    public function setImage(?string $image) : Brand
    {
        $this->image = $image;

        return $this;
    }
}