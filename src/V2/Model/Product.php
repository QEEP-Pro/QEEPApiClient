<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class Product
{
    /** @JMS\Type("integer") */
    protected $id;

    /** @JMS\Type("string") */
    protected $name;

    /** @JMS\Type("float") */
    protected $price;

    /** @JMS\Type("integer") */
    protected $quantity;

     /** @JMS\Type("string") */
    protected $description;

     /** @JMS\Type("string") */
    protected $body;

     /** @JMS\Type("boolean") */
    protected $visible;

     /** @JMS\Type("integer") */
    protected $position;

     /** @JMS\Type("DateTime") */
    protected $created;

    /** @JMS\Type("boolean") */
    protected $featured;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Option>") */
    protected $options;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Variant>") */
    protected $variants;

    /** @JMS\Type("array<string>") */
    protected $images;

    /** @JMS\Type("QEEP\QEEPApiClient\V2\Model\Brand") */
    protected $brand;

    /** @JMS\Type("array<QEEP\QEEPApiClient\V2\Model\Category>") */
    protected $categories;

    public function getId() :?int
    {
        return $this->id;
    }

    public function setId(int $id) : Product
    {
        $this->id = $id;

        return $this;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Product
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price) : Product
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity() : ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity) : Product
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription() : ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description) : Product
    {
        $this->description = $description;

        return $this;
    }

    public function getBody() : ?string
    {
        return $this->body;
    }

    public function setBody(?string $body) : Product
    {
        $this->body = $body;

        return $this;
    }

    public function getVisible() : ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible) : ?Product
    {
        $this->visible = $visible;

        return $this;
    }

    public function getPosition() : ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position) : Product
    {
        $this->position = $position;

        return $this;
    }

    public function getCreated() : ?\DateTime
    {
        return $this->created;
    }

    public function setCreated(?string $created) : Product
    {
        if ($created) {
            $this->created = new \DateTime($created);
        }

        return $this;
    }

    public function getFeatured() : ?bool
    {
        return $this->featured;
    }

    public function setFeatured(?bool $featured) : Product
    {
        $this->featured = $featured;

        return $this;
    }

    public function getOptions() : ?array
    {
        return $this->options;
    }

    public function setOptions(array $options) : Product
    {
        $this->options = $options;

        return $this;
    }

    public function getVariants() : ?array
    {
        return $this->variants;
    }

    public function setVariants(array  $variants) : Product
    {
        $this->variants = $variants;

        return $this;
    }

    public function getImages() : ?array
    {
        return $this->images;
    }

    public function setImages(array $images) : Product
    {
        $this->images = $images;

        return $this;
    }

    public function getBrand() : ?Brand
    {
        return $this->brand;
    }

    public function setBrand(array  $brand) : Product
    {
        $this->brand = $brand;

        return $this;
    }

    public function getCategories() : ?array
    {
        return $this->categories;
    }

    public function setCategories(array  $categories) : Product
    {
        $this->categories = $categories;

        return $this;
    }
}
