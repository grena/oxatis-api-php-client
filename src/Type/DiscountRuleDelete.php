<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleDelete implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    protected $DiscountRuleID;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleID
     */
    public function __construct($WSIdentitySoap, $DiscountRuleID)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleID = $DiscountRuleID;
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
     * @return DiscountRuleDelete
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleID()
    {
        return $this->DiscountRuleID;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleID
     * @return DiscountRuleDelete
     */
    public function withDiscountRuleID($DiscountRuleID)
    {
        $new = clone $this;
        $new->DiscountRuleID = $DiscountRuleID;

        return $new;
    }


}

