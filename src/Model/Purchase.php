<?php

namespace QEEP\QEEPApiClient\Model;

class Purchase
{
    protected $id;

    protected $price;

    protected $amount;

    protected $modifiers;

    // QEEP-Pro принимает `code` вместо `id`

//    public function getId() : ?int
//    {
//        return $this->id;
//    }

    public function getCode(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Purchase
    {
        $this->id = $id;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): Purchase
    {
        $this->price = $price;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): Purchase
    {
        $this->amount = $amount;

        return $this;
    }

    public function getModifiers(): ?array
    {
        return $this->modifiers;
    }

    public function setModifiers(?array $modifiers): Purchase
    {
        $this->modifiers = $modifiers;

        return $this;
    }
}
