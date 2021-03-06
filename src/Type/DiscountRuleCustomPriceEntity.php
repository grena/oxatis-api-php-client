<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleCustomPriceEntity extends OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    protected $UserIdEntity;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntity
     */
    protected $DiscountRuleEntity;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    public function getUserIdEntity()
    {
        return $this->UserIdEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserIdEntity
     * @return DiscountRuleCustomPriceEntity
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
     * @return DiscountRuleCustomPriceEntity
     */
    public function withDiscountRuleEntity($DiscountRuleEntity)
    {
        $new = clone $this;
        $new->DiscountRuleEntity = $DiscountRuleEntity;

        return $new;
    }


}

