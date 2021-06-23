<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleCustomPriceUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceEntity
     */
    private $DiscountRuleCustomPrice;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceEntity $DiscountRuleCustomPrice
     */
    public function __construct($WSIdentitySoap, $DiscountRuleCustomPrice)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleCustomPrice = $DiscountRuleCustomPrice;
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
     * @return DiscountRuleCustomPriceUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceEntity
     */
    public function getDiscountRuleCustomPrice()
    {
        return $this->DiscountRuleCustomPrice;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleCustomPriceEntity $DiscountRuleCustomPrice
     * @return DiscountRuleCustomPriceUpdate
     */
    public function withDiscountRuleCustomPrice($DiscountRuleCustomPrice)
    {
        $new = clone $this;
        $new->DiscountRuleCustomPrice = $DiscountRuleCustomPrice;

        return $new;
    }


}

