<?php

namespace QEEP\QEEPApiClient\Model;

class Product
{
    protected $id;

    protected $parentId;

    protected $title;

    protected $price;

    protected $amount;

    protected $categoryIds;

    protected $brandId;

    protected $description;

    protected $photos;

    public function __construct()
    {
        $this->categoryIds = [];
        $this->photos      = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Product
    {
        $this->id = $id;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): Product
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): Product
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): Product
    {
        $this->price = $price;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): Product
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    public function setCategoryIds(array $categoryIds): Product
    {
        $this->categoryIds = $categoryIds;

        return $this;
    }

    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    public function setBrandId(int $brandId): Product
    {
        $this->brandId = $brandId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): Product
    {
        $this->description = $description;

        return $this;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    // QEEP-Pro отдает массив фотографий под именем `photo` вместо `photos`

//    public function setPhotos(array $photos): Product
//    {
//        $this->photos = $photos;
//
//        return $this;
//    }

    public function setPhoto(array $photo): Product
    {
        $this->photos = $photo;

        return $this;
    }

    // return first photo
    public function getPhoto(): ?string
    {
        return $this->photos ? $this->photos[0] : null;
    }
}
