<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleUpdateComputeMode implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleComputeModeEntity
     */
    private $DiscountRuleComputeMode;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleComputeModeEntity $DiscountRuleComputeMode
     */
    public function __construct($WSIdentitySoap, $DiscountRuleComputeMode)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleComputeMode = $DiscountRuleComputeMode;
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
     * @return DiscountRuleUpdateComputeMode
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleComputeModeEntity
     */
    public function getDiscountRuleComputeMode()
    {
        return $this->DiscountRuleComputeMode;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleComputeModeEntity $DiscountRuleComputeMode
     * @return DiscountRuleUpdateComputeMode
     */
    public function withDiscountRuleComputeMode($DiscountRuleComputeMode)
    {
        $new = clone $this;
        $new->DiscountRuleComputeMode = $DiscountRuleComputeMode;

        return $new;
    }


}

