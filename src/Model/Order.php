<?php

namespace QEEP\QEEPApiClient\Model;

class Order
{
    protected $id;

    protected $buyerName;

    protected $buyerPhone;

    protected $buyerEmail;

    protected $deliveryPrice;

    protected $buyerAddress;

    protected $promoCode;

    protected $discountPrice;

    protected $deliveryType;

    protected $deliveryTime;

    protected $deliveryHoursFrom;

    protected $deliveryHoursTo;

    protected $deliveryMinuteFrom;

    protected $deliveryMinuteTo;

    protected $comment;

    protected $salesChannel;

    protected $purchases;

    protected $allowSpam = true;

    protected $paymentMethod;

    protected $paidByBonuses;

    protected $buyerId;

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

    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    public function setBuyerId(?int $buyerId): Order
    {
        $this->buyerId = $buyerId;

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

    public function getPaidByBonuses(): ?int
    {
        return $this->paidByBonuses;
    }

    public function setPaidByBonuses(?int $paidByBonuses): Order
    {
        $this->paidByBonuses = $paidByBonuses;

        return $this;
    }

    public function getBuyerAddress(): ?string
    {
        return $this->buyerAddress;
        }


    public function setBuyerAddress(?string $buyerAddress): Order
    {
        $this->buyerAddress = $buyerAddress;

        return $this;
    }

    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }

    public function setPromoCode(?string $promoCode): Order
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    public function getDiscountPrice(): ?int
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice(?int $discountPrice): Order
    {
        $this->discountPrice = $discountPrice;

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

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(?string $deliveryType): Order
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function getDeliveryTime(): ?int
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?int $deliveryTime): Order
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    public function getDeliveryHoursFrom(): ?int
    {
        return $this->deliveryHoursFrom;
    }

    public function setDeliveryHoursFrom(?int $deliveryHoursFrom): Order
    {
        $this->deliveryHoursFrom = $deliveryHoursFrom;

        return $this;
    }

    public function getDeliveryHoursTo(): ?int
    {
        return $this->deliveryHoursTo;
    }

    public function setDeliveryHoursTo(?int $deliveryHoursTo): Order
    {
        $this->deliveryHoursTo = $deliveryHoursTo;

        return $this;
    }

    public function getDeliveryMinuteFrom(): ?int
    {
        return $this->deliveryMinuteFrom;
    }

    public function setDeliveryMinuteFrom(?int $deliveryMinuteFrom): Order
    {
        $this->deliveryMinuteFrom = $deliveryMinuteFrom;

        return $this;
    }

    public function getDeliveryMinuteTo(): ?int
    {
        return $this->deliveryMinuteTo;
    }

    public function setDeliveryMinuteTo(?int $deliveryMinuteTo): Order
    {
        $this->deliveryMinuteTo = $deliveryMinuteTo;

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
