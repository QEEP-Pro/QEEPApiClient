<?php

namespace QEEP\QEEPApiClient\V2\Model;

use JMS\Serializer\Annotation as JMS;

class BonusSystem
{
    /**  @JMS\Type("integer")  */
    private $id;

    /**  @JMS\Type("integer")  */
    private $bonusRewardPercent = 0;

    /**  @JMS\Type("integer")  */
    private $welcomeBonus = 0;

    /**  @JMS\Type("integer")  */
    private $bonusesLimitPerPayment;

    /**  @JMS\Type("boolean")  */
    private $active = false;

    /**  @JMS\Type("boolean")  */
    private $rewardOrdersPaidWithBonuses = false;

    /**  @JMS\Type("string")  */
    private $shortDescription;

    /**  @JMS\Type("string")  */
    private $fullDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWelcomeBonus(): ?int
    {
        return $this->welcomeBonus;
    }

    public function setWelcomeBonus(?int $welcomeBonus): self
    {
        $this->welcomeBonus = $welcomeBonus;

        return $this;
    }


    public function getBonusRewardPercent(): ?int
    {
        return $this->bonusRewardPercent;
    }

    public function setBonusRewardPercent(?int $bonusRewardPercent): self
    {
        $this->bonusRewardPercent = $bonusRewardPercent;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getBonusesLimitPerPayment(): ?int
    {
        return $this->bonusesLimitPerPayment;
    }

    public function setBonusesLimitPerPayment(?int $bonusesLimitPerPayment): self
    {
        $this->bonusesLimitPerPayment = $bonusesLimitPerPayment;

        return $this;
    }

    public function getRewardOrdersPaidWithBonuses(): ?bool
    {
        return $this->rewardOrdersPaidWithBonuses;
    }

    public function setRewardOrdersPaidWithBonuses(bool $rewardOrdersPaidWithBonuses): self
    {
        $this->rewardOrdersPaidWithBonuses = $rewardOrdersPaidWithBonuses;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getFullDescription(): ?string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(string $fullDescription): self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }
}
