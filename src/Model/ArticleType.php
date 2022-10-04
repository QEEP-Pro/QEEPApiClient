<?php

namespace QEEP\QEEPApiClient\Model;

class ArticleType
{
    protected $id;

    protected $title;

    protected $description;

    protected $showInMenu = false;

    public function setId(int $id): ArticleType
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setTitle(string $title): ArticleType
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setDescription(string $description): ArticleType
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function isShowInMenu(): bool
    {
        return $this->showInMenu;
    }

    public function setShowInMenu(bool $showInMenu): ArticleType
    {
        $this->showInMenu = $showInMenu;

        return $this;
    }
}
