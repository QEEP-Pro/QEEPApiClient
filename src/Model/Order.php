<?php

namespace QEEP\QEEPApiClient\Model;

class Order
{
    protected $id;

    protected $buyerName;

    protected $buyerPhone;

    protected $buyerEmail;

    protected $deliveryPrice;

    protected $comment;

    protected $salesChannel;

    protected $purchases;

    protected $allowSpam = true;

    protected $paymentMethod;

    public function __construct()
    {
        $this->purchases = [];
    }

    // QEEP-Pro принимает `orderId` вместо `id`

//    public function getId() : ?int
//    {
//        return $this->id;
//    }

    public function getOrderId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Order
    {
        $this->id = $id;

        return $this;
    }

    public function getBuyerName(): ?string
    {
        return $this->buyerName;
    }

    public function setBuyerName(?string $buyerName): Order
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    public function setBuyerPhone(?string $buyerPhone): Order
    {
        $this->buyerPhone = $buyerPhone;

        return $this;
    }

    public function getBuyerEmail(): ?string
    {
        return $this->buyerEmail;
    }

    public function setBuyerEmail(?string $buyerEmail): Order
    {
        $this->buyerEmail = $buyerEmail;

        return $this;
    }

    public function getDeliveryPrice(): ?float
    {
        return $this->deliveryPrice;
    }

    public function setDeliveryPrice(?float $deliveryPrice): Order
    {
        $this->deliveryPrice = $deliveryPrice;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): Order
    {
        $this->comment = $comment;

        return $this;
    }

    // QEEP-Pro принимает `website` вместо `salesChannel`

//    public function getSalesChannel() : ?string
//    {
//        return $this->salesChannel;
//    }

    public function getWebsite(): ?string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?string $salesChannel): Order
    {
        $this->salesChannel = $salesChannel;

        return $this;
    }

    // QEEP-Pro принимает `products` вместо `purchases`

//    public function getPurchases() : array
//    {
//        return $this->purchases;
//    }

    public function getProducts(): array
    {
        return $this->purchases;
    }

    public function setPurchases(array $purchases): Order
    {
        $this->purchases = $purchases;

        return $this;
    }

    public function getAllowSpam(): bool
    {
        return $this->allowSpam;
    }

    public function setAllowSpam(bool $allowSpam): Order
    {
        $this->allowSpam = $allowSpam;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): Order
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }
}
