<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleLinkToProductPriceEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductPriceIndexEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    protected $DiscountRuleEntity;

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

