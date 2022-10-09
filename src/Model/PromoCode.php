<?php

namespace QEEP\QEEPApiClient\Model;

class PromoCode
{
    /** @var integer */
    private $id;

    /** @var string */
    private $name;

    /*** @var integer */
    private $discount;

    /** @var string */
    private $discountType;

    /** @var integer */
    private $usageLimit;

    /** @var boolean */
    private $firstOrderOnly;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getDiscountType(): string
    {
        return $this->discountType;
    }

    public function setDiscountType(string $discountType): self
    {
        $this->discountType = $discountType;

        return $this;
    }

    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
    }

    public function setUsageLimit(int $usageLimit = null): self
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }

    public function isFirstOrderOnly(): ?bool
    {
        return $this->firstOrderOnly;
    }

    public function setFirstOrderOnly(bool $firstOrderOnly): self
    {
        $this->firstOrderOnly = $firstOrderOnly;

        return $this;
    }
}
