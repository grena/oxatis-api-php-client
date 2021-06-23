<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleProductFamilyCustomPriceEntity
{

    /**
     * @var string
     */
    private $FamilyName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    private $UserIdEntity;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    private $DiscountRuleEntity;

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->FamilyName;
    }

    /**
     * @param string $FamilyName
     * @return DiscountRuleProductFamilyCustomPriceEntity
     */
    public function withFamilyName($FamilyName)
    {
        $new = clone $this;
        $new->FamilyName = $FamilyName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    public function getUserIdEntity()
    {
        return $this->UserIdEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserIdEntity
     * @return DiscountRuleProductFamilyCustomPriceEntity
     */
    public function withUserIdEntity($UserIdEntity)
    {
        $new = clone $this;
        $new->UserIdEntity = $UserIdEntity;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    public function getDiscountRuleEntity()
    {
        return $this->DiscountRuleEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity $DiscountRuleEntity
     * @return DiscountRuleProductFamilyCustomPriceEntity
     */
    public function withDiscountRuleEntity($DiscountRuleEntity)
    {
        $new = clone $this;
        $new->DiscountRuleEntity = $DiscountRuleEntity;

        return $new;
    }


}

