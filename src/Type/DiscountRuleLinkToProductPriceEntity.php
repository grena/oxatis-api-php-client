<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleLinkToProductPriceEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    private $DiscountRuleEntity;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    public function getDiscountRuleEntity()
    {
        return $this->DiscountRuleEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity $DiscountRuleEntity
     * @return DiscountRuleLinkToProductPriceEntity
     */
    public function withDiscountRuleEntity($DiscountRuleEntity)
    {
        $new = clone $this;
        $new->DiscountRuleEntity = $DiscountRuleEntity;

        return $new;
    }


}

