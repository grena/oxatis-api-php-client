<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing DiscountRuleLinkToProductPriceEntityType
 *
 *
 * XSD Type: DiscountRuleLinkToProductPriceEntity
 */
class DiscountRuleLinkToProductPriceEntityType extends ProductPriceIndexEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntityType $discountRuleEntity
     */
    private $discountRuleEntity = null;

    /**
     * Gets as discountRuleEntity
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntityType
     */
    public function getDiscountRuleEntity()
    {
        return $this->discountRuleEntity;
    }

    /**
     * Sets a new discountRuleEntity
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntityType $discountRuleEntity
     * @return self
     */
    public function setDiscountRuleEntity(DiscountRuleEntityType $discountRuleEntity)
    {
        $this->discountRuleEntity = $discountRuleEntity;
        return $this;
    }


}

