<?php

namespace QEEP\QEEPApiClient\V2\Model;


class Product
{
    protected $id;

    protected $name;

    protected $price;

    protected $quantity;

    protected $description;

    protected $body;

    protected $visible;

    protected $position;

    protected $created;

    protected $featured;

    protected $options;

    protected $variants;

    protected $images;

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

    public function getImages() : array
    {
        return $this->images;
    }

    public function setImages(array $images) : Product
    {
        $this->images = $images;

        return $this;
    }
}
