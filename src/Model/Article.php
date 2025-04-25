<?php

namespace QEEP\QEEPApiClient\Model;

class Article
{
    protected $id;

    protected $title;

    protected $typeId;

    protected $description;

    protected $body;

    protected $redirectToLink = false;

    protected $published = true;

    protected $showRelatedProducts = false;

    protected $showInMenu = false;

    protected $created;

    protected $images;

    protected $link;

    public function __construct()
    {
        $this->created = new \DateTime();
        $this->images = [];
    }

    public function setId(int $id): Article
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): Article
    {
        $this->title = $title;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    // QEEP-Pro отдает объект типа вместо идентификатора

//    public function setTypeId(int $typeId) : Article
//    {
//        $this->typeId = $typeId;
//
//        return $this;
//    }

    public function setType(array $type): Article
    {
        $this->typeId = $type['id'];

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): Article
    {
        $this->description = $description;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): Article
    {
        $this->body = $body;

        return $this;
    }

    public function isRedirectToLink(): bool
    {
        return $this->redirectToLink;
    }

    public function setRedirectToLink(bool $redirectToLink): Article
    {
        $this->redirectToLink = $redirectToLink;

        return $this;
    }

    public function isPublished(): bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): Article
    {
        $this->published = $published;

        return $this;
    }

    public function isShowRelatedProducts(): bool
    {
        return $this->showRelatedProducts;
    }

    public function setShowRelatedProducts(bool $showRelatedProducts): Article
    {
        $this->showRelatedProducts = $showRelatedProducts;

        return $this;
    }

    public function isShowInMenu(): bool
    {
        return $this->showInMenu;
    }

    public function setShowInMenu(bool $showInMenu): Article
    {
        $this->showInMenu = $showInMenu;

        return $this;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(string $created): Article
    {
        $this->created = new \DateTime($created);

        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): Article
    {
        $this->images = $images;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): Article
    {
        $this->link = $link;

        return $this;
    }

    // return first image
    public function getImage(): ?string
    {
        return $this->images ? $this->images[0] : null;
    }
}
