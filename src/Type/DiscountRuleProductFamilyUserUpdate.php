<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleProductFamilyUserUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserEntity
     */
    private $DiscountRuleProductFamilyUser;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserEntity $DiscountRuleProductFamilyUser
     */
    public function __construct($WSIdentitySoap, $DiscountRuleProductFamilyUser)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleProductFamilyUser = $DiscountRuleProductFamilyUser;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return DiscountRuleProductFamilyUserUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserEntity
     */
    public function getDiscountRuleProductFamilyUser()
    {
        return $this->DiscountRuleProductFamilyUser;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleProductFamilyUserEntity $DiscountRuleProductFamilyUser
     * @return DiscountRuleProductFamilyUserUpdate
     */
    public function withDiscountRuleProductFamilyUser($DiscountRuleProductFamilyUser)
    {
        $new = clone $this;
        $new->DiscountRuleProductFamilyUser = $DiscountRuleProductFamilyUser;

        return $new;
    }


}

