<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductDeleteUserPackagingPrices implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductUserIdEntity
     */
    private $ProductUserId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductUserIdEntity $ProductUserId
     */
    public function __construct($WSIdentitySoap, $ProductUserId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductUserId = $ProductUserId;
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
     * @return ProductDeleteUserPackagingPrices
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductUserIdEntity
     */
    public function getProductUserId()
    {
        return $this->ProductUserId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductUserIdEntity $ProductUserId
     * @return ProductDeleteUserPackagingPrices
     */
    public function withProductUserId($ProductUserId)
    {
        $new = clone $this;
        $new->ProductUserId = $ProductUserId;

        return $new;
    }


}

