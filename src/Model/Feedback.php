<?php

namespace QEEP\QEEPApiClient\Model;

class Feedback
{
    protected $id;

    protected $name;

    protected $phone;

    protected $email;

    protected $comment;

    public function setId(int $id): Feedback
    {
        $this->id = $id;

        return $this;
    }

    public function setName(?string $name): Feedback
    {
        $this->name = $name;

        return $this;
    }

    public function setPhone(?string $phone): Feedback
    {
        $this->phone = $phone;

        return $this;
    }

    public function setEmail(?string $email): Feedback
    {
        $this->email = $email;

        return $this;
    }

    public function setComment(?string $comment): Feedback
    {
        $this->comment = $comment;

        return $this;
    }
}
