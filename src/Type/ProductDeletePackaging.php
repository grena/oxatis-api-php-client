<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductDeletePackaging implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingPerPriceEntity
     */
    private $ProductPackagingPerPrice;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingPerPriceEntity $ProductPackagingPerPrice
     */
    public function __construct($WSIdentitySoap, $ProductPackagingPerPrice)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductPackagingPerPrice = $ProductPackagingPerPrice;
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
     * @return ProductDeletePackaging
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductPackagingPerPriceEntity
     */
    public function getProductPackagingPerPrice()
    {
        return $this->ProductPackagingPerPrice;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingPerPriceEntity $ProductPackagingPerPrice
     * @return ProductDeletePackaging
     */
    public function withProductPackagingPerPrice($ProductPackagingPerPrice)
    {
        $new = clone $this;
        $new->ProductPackagingPerPrice = $ProductPackagingPerPrice;

        return $new;
    }


}

