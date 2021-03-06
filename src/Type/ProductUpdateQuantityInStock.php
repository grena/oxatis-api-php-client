<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdateQuantityInStock implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductEntity
     */
    protected $Product;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductEntity $Product
     */
    public function __construct($WSIdentitySoap, $Product)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->Product = $Product;
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
     * @return ProductUpdateQuantityInStock
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductEntity
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductEntity $Product
     * @return ProductUpdateQuantityInStock
     */
    public function withProduct($Product)
    {
        $new = clone $this;
        $new->Product = $Product;

        return $new;
    }


}

