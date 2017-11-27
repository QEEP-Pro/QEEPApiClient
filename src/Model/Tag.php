<?php

namespace QEEP\QEEPApiClient\Model;


class Tag
{
    protected $id;

    protected $title;

    protected $position;

    protected $parentId;

    protected $visible = true;

    public function getId() : ?int
    {
        return $this->id;
    }

    // QEEP-Pro отдает настоящий id в поле code

//    public function setId(int $id) : Tag
//    {
//        $this->id = $id;
//
//        return $this;
//    }

    public function setCode(int $code) : Tag
    {
        $this->id = $code;

        return $this;
    }

    public function getTitle() : ?string
    {
        return $this->title;
    }

    // QEEP-Pro отдает название в поле value

//    public function setTitle(string $title) : Tag
//    {
//        $this->title = $title;
//
//        return $this;
//    }

    public function setValue(string $value) : Tag
    {
        $this->title = $value;

        return $this;
    }

    public function getParentId() : ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId) : Tag
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function isVisible() : bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible) : Tag
    {
        $this->visible = $visible;

        return $this;
    }

    public function getPosition() : ?int
    {
        return $this->position;
    }

    public function setPosition(int $position) : Tag
    {
        $this->position = $position;

        return $this;
    }
}
