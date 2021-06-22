<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing DiscountRuleProductFamilyCustomPriceEntityType
 *
 *
 * XSD Type: DiscountRuleProductFamilyCustomPriceEntity
 */
class DiscountRuleProductFamilyCustomPriceEntityType
{

    /**
     * @var string $familyName
     */
    private $familyName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userIdEntity
     */
    private $userIdEntity = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEntityType $discountRuleEntity
     */
    private $discountRuleEntity = null;

    /**
     * Gets as familyName
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * @param string $familyName
     * @return self
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as userIdEntity
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType
     */
    public function getUserIdEntity()
    {
        return $this->userIdEntity;
    }

    /**
     * Sets a new userIdEntity
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userIdEntity
     * @return self
     */
    public function setUserIdEntity(UserIdEntityType $userIdEntity)
    {
        $this->userIdEntity = $userIdEntity;
        return $this;
    }

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

