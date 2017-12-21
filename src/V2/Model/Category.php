<?php

namespace QEEP\QEEPApiClient\V2\Model;


use JMS\Serializer\Annotation as JMS;

class Category
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("string") */
    protected $description;

    /** @JMS\Type("string") */
    protected $body;

    /** @JMS\Type("string") */
    protected $image;

    /** @JMS\Type("integer") */
    protected $position;

    /** @JMS\Type("boolean") */
    protected $visible;

    /** @JMS\Type("boolean") */
    protected $brandsAsSubcategories;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Category>") */
    protected $subcategories;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Brand>") */
    protected $brands;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : Category
    {
        $this->id = $id;

        return $this;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Category
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription() : ?string
    {
        return $this->description;
    }

    public function setDescription(?String $description) : Category
    {
        $this->description = $description;

        return $this;
    }

    public function getBody() : ?string
    {
        return $this->body;
    }

    public function setBody(?string $body) : Category
    {
        $this->body = $body;

        return $this;
    }

    public function getImage() : ?string
    {
        return $this->image;
    }

    public function setImage(?string $image) : Category
    {
        $this->image = $image;

        return $this;
    }

    public function getPosition() : ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position) : Category
    {
        $this->position = $position;

        return $this;
    }

    public function getVisible() : ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible) : Category
    {
        $this->visible = $visible;

        return $this;
    }

    public function getBrandsAsSubcategories() : ?bool
    {
        return $this->brandsAsSubcategories;
    }

    public function setBrandsAsSubcategories(?bool $brandsAsSubcategories) : Category
    {
        $this->brandsAsSubcategories = $brandsAsSubcategories;

        return $this;
    }

    public function getSubcategories() : ?array
    {
        return $this->subcategories;
    }

    public function setSubcategories(?array $subcategories) : Category
    {
        $this->subcategories = $subcategories;

        return $this;
    }

    public function getBrands() : ?array
    {
        return $this->brands;
    }

    public function setBrands(?array $brands) : Category
    {
        $this->brands = $brands;

        return $this;
    }
}