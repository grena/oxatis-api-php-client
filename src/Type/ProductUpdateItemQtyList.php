<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdateItemQtyList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfUpdateItemStockEntity
     */
    private $quantityProductList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfUpdateItemStockEntity $quantityProductList
     */
    public function __construct($WSIdentitySoap, $quantityProductList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->quantityProductList = $quantityProductList;
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
     * @return ProductUpdateItemQtyList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfUpdateItemStockEntity
     */
    public function getQuantityProductList()
    {
        return $this->quantityProductList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfUpdateItemStockEntity $quantityProductList
     * @return ProductUpdateItemQtyList
     */
    public function withQuantityProductList($quantityProductList)
    {
        $new = clone $this;
        $new->quantityProductList = $quantityProductList;

        return $new;
    }


}

