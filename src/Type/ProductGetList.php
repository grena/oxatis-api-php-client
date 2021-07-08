<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductGetList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductListEntity
     */
    protected $ProductList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductListEntity $ProductList
     */
    public function __construct($WSIdentitySoap, $ProductList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductList = $ProductList;
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
     * @return ProductGetList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductListEntity
     */
    public function getProductList()
    {
        return $this->ProductList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductListEntity $ProductList
     * @return ProductGetList
     */
    public function withProductList($ProductList)
    {
        $new = clone $this;
        $new->ProductList = $ProductList;

        return $new;
    }


}

