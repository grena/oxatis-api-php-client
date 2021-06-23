<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductGetItemCondition implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    private $ProductId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $ProductId
     */
    public function __construct($WSIdentitySoap, $ProductId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductId = $ProductId;
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
     * @return ProductGetItemCondition
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $ProductId
     * @return ProductGetItemCondition
     */
    public function withProductId($ProductId)
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }


}

