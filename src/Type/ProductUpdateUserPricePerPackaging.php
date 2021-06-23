<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdateUserPricePerPackaging implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductUserPricePerPackagingEntity
     */
    private $ProductUserPricePerPackaging;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductUserPricePerPackagingEntity $ProductUserPricePerPackaging
     */
    public function __construct($WSIdentitySoap, $ProductUserPricePerPackaging)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductUserPricePerPackaging = $ProductUserPricePerPackaging;
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
     * @return ProductUpdateUserPricePerPackaging
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductUserPricePerPackagingEntity
     */
    public function getProductUserPricePerPackaging()
    {
        return $this->ProductUserPricePerPackaging;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductUserPricePerPackagingEntity $ProductUserPricePerPackaging
     * @return ProductUpdateUserPricePerPackaging
     */
    public function withProductUserPricePerPackaging($ProductUserPricePerPackaging)
    {
        $new = clone $this;
        $new->ProductUserPricePerPackaging = $ProductUserPricePerPackaging;

        return $new;
    }


}

