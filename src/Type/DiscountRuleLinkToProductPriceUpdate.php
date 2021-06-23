<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleLinkToProductPriceUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceEntity
     */
    private $DiscountRuleLinkToProductPrice;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceEntity $DiscountRuleLinkToProductPrice
     */
    public function __construct($WSIdentitySoap, $DiscountRuleLinkToProductPrice)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleLinkToProductPrice = $DiscountRuleLinkToProductPrice;
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
     * @return DiscountRuleLinkToProductPriceUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceEntity
     */
    public function getDiscountRuleLinkToProductPrice()
    {
        return $this->DiscountRuleLinkToProductPrice;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleLinkToProductPriceEntity $DiscountRuleLinkToProductPrice
     * @return DiscountRuleLinkToProductPriceUpdate
     */
    public function withDiscountRuleLinkToProductPrice($DiscountRuleLinkToProductPrice)
    {
        $new = clone $this;
        $new->DiscountRuleLinkToProductPrice = $DiscountRuleLinkToProductPrice;

        return $new;
    }


}

