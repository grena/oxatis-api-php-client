<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductAddUpSellItem implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\RelatedProductEntity
     */
    private $RelatedProductsEntity;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\RelatedProductEntity $RelatedProductsEntity
     */
    public function __construct($WSIdentitySoap, $RelatedProductsEntity)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->RelatedProductsEntity = $RelatedProductsEntity;
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
     * @return ProductAddUpSellItem
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\RelatedProductEntity
     */
    public function getRelatedProductsEntity()
    {
        return $this->RelatedProductsEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\RelatedProductEntity $RelatedProductsEntity
     * @return ProductAddUpSellItem
     */
    public function withRelatedProductsEntity($RelatedProductsEntity)
    {
        $new = clone $this;
        $new->RelatedProductsEntity = $RelatedProductsEntity;

        return $new;
    }


}

