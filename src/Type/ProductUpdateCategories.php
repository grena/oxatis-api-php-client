<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdateCategories implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductEntity
     */
    private $Product;

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
     * @return ProductUpdateCategories
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
     * @return ProductUpdateCategories
     */
    public function withProduct($Product)
    {
        $new = clone $this;
        $new->Product = $Product;

        return $new;
    }


}

